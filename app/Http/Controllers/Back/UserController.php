<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
                'password' => 'confirmed|min:6',
            ],
        );

           $data = User::find($request->id);

            if($data->password == Hash::make($request->password))
            {
                $data -> password = Hash::make($request->input('password'));
                $data->save();
                return redirect()->back()->with('status','Şifre Değiştirme İşlemi Başarılı');
            }

            return redirect()->back()->with('status','Islem Basarisiz');    

           

       

    }


    public function profilupdate(Request $request)
    {
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
