<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\ServicesCatergori;
use Illuminate\Http\Request;

class ServicesCategoryController extends Controller
{

     public function index(){

        $servicesCategori = ServicesCatergori::all();

         return view('back.pages.servicesCategori.index',compact('servicesCategori'));
     }


    public function create(){
        return view('back.pages.servicesCategori.create');
    }

    public function store(Request $request){

      

        $data = new ServicesCatergori();

        $data -> servicesCategoryName_tr = $request->input('servicesCategoryName_tr');
        $data -> servicesCategoryName_en = $request->input('servicesCategoryName_en');
      
        
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
         
         $data->save();
        return redirect()->back()->with('status','Hizmet Kategori Başarılı Bir Şekilde Eklendi'); 
    }


    public function edit($id){
        $servicescategori = ServicesCatergori::find($id);
        return view('back.pages.servicesCategori.edit',compact('servicescategori'));
    }


    public function update(Request $request){

        

        $data = ServicesCatergori::find($request->id);

        $data -> servicesCategoryName_tr = $request->input('servicesCategoryName_tr');
        $data -> servicesCategoryName_en = $request->input('servicesCategoryName_en');

        
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
        return redirect()->back()->with('status','Hizmet Kategori Güncellendi');
    }

    
    public  function delete($id)
    {
        $data = ServicesCatergori::find($id);

        $destination = 'uploads/services/'.$data->image;
        if(\File::exists($destination))
        {
            \File::delete($destination);
        }
      
        $data->delete();
        return redirect()->back()->with('status','Kategori Silme İşlemi Başarılı');

    }
}
