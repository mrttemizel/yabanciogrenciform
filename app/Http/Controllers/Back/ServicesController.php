<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Services;
use App\Models\Back\ServicesCatergori;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){

        $services = Services::all();
        return view('back.pages.services.index',compact('services'));
    }

    public function create(){
        $servicesCategori = ServicesCatergori::all();
        return view('back.pages.services.create',compact('servicesCategori'));
    }

    public function store(Request $request){

        
       $data = new Services();

       $data -> header_tr = $request->input('header_tr');
       $data -> header_en = $request->input('header_en');
       $data -> incontent_tr = $request->input('incontent_tr');
       $data -> incontent_en = $request->input('incontent_en');
       $data -> slug_tr = $request->input('slug_tr');
       $data -> slug_en = $request->input('slug_en');
       $data -> servicesCategori_id = $request->input('servicesCategori_id');
       
       if($request -> hasFile('image'))
        {
            $destination = 'Back/uploads/services/'.$data->image;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/services/', $filname);
            $data->image = $filname;
        }   
        
        if($request -> hasFile('icon'))
        {
            $destinationicon = 'Back/uploads/services/'.$data->icon;
            if (\File::exists($destinationicon))
            {
                \File::delete($destinationicon);
            }
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/services/', $filname);
            $data->icon = $filname;
        } 

        $data->save();
        return redirect()->back()->with('status','Hizmet Başarılı Bir Şekilde Eklendi');  

    }


   

    public function edit($id)
    {
        return view('back.pages.services.edit', [
            'servicesCategori' => ServicesCatergori::all(),
             'services' => Services::find($id)
        ]);
    }


    public function update(Request $request){

    

        $data = Services::find($request->id);

        $data -> header_tr = $request->input('header_tr');
        $data -> header_en = $request->input('header_en');
        $data -> incontent_tr = $request->input('incontent_tr');
        $data -> incontent_en = $request->input('incontent_en');
        $data -> slug_tr = $request->input('slug_tr');
        $data -> slug_en = $request->input('slug_en');
        $data -> servicesCategori_id = $request->input('servicesCategori_id');
    
        if($request->input('status')=='on')
        {
         $data -> status = '0';      
        }
        else{
          $data -> status = '1';  
        }


        if($request -> hasFile('icon'))
        {
            $destination = 'Back/uploads/services/'.$data->icon;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/services/', $filname);
            $data->icon = $filname;
        }

        if($request -> hasFile('image'))
        {
            $destination2 = 'Back/uploads/services/'.$data->image;
            if (\File::exists($destination2))
            {
                \File::delete($destination2);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/services/', $filname);
            $data->image = $filname;
        }

        $data->save();

        return redirect()->back()->with('status','Servis Güncellendi');

    }


    public function delete($id){


        $data = Services::find($id);

        $destination = 'uploads/services/'.$data->image;
        if(\File::exists($destination))
        {
            \File::delete($destination);
        }
        
        $destination2 = 'uploads/services/'.$data->icon;
        if(\File::exists($destination2))
        {
            \File::delete($destination2);
        }
      


        $data->delete();
        return redirect()->back()->with('status','Himzet Silme İşlemi Başarılı');
    }



    

}
