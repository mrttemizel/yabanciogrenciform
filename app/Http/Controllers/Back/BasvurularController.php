<?php

namespace App\Http\Controllers\Back;


use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\YukselLisansBolumler;
use Illuminate\Http\Request;

class BasvurularController extends Controller
{
    public function index(){
        
        $students = Students::all();
        return view('back.pages.basvurular.index',compact('students'));
    }


    public function see($id){
        return view('back.pages.basvurular.see', [
            'bolumler' => YukselLisansBolumler::all(),
             'student' => Students::find($id)
        ]);
    }

    public function delete($id){
        Students::find($id)->delete();
        return redirect()->back()->with('status','Başvuru Silindi');
        
    }
}
