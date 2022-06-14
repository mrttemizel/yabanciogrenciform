<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){

        $id = Auth()->user()->id;
        $data = User::find($id);
        return view('back.pages.user.index',compact('data'));

        
    }


    public function editpassword(Request $request){


        $request->validate(
            [
                'oldpassword' => 'required',
                'password' => 'required|min:6|confirmed',
              
               
            ],
        );

        $data = User::find($request->id);

        if(Hash::check($request->oldpassword,$data->password)){

            $data -> password = Hash::make($request->input('password'));
            $data->save();

            return redirect()->back()->with('status','Şifre Değiştirme İşlemi Başarılı');
        }

        
            return redirect()->back()->with('status-warning','Girilen Şifre Hatalıdır');    
       

    }


    public function profilupdate(Request $request)
    {

        $request->validate(
            [
                'email' => 'email|required',
                'name' => 'required|min:4|max:25',
            ],
        );
    



        $data = User::find($request->id);


        $data -> email = $request->input('email');
        $data -> name = $request->input('name');
        $data -> summary = $request->input('summary');

        if($request -> hasFile('image'))
        {
            $destination = 'Back/uploads/userprofil/'.$data->image;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/userprofil/', $filname);
            $data->image = $filname;
        }   
        
        $data->save();
       return redirect()->back()->with('status','Profil Başarılı Bir Şekilde Eklendi');

    }
}
