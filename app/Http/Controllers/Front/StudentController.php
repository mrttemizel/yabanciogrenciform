<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\YukselLisansBolumler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmit; 
use Illuminate\Support\Facades\Stroage;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{

    public function index(){
        
        $bolumler = YukselLisansBolumler::all();

        return view('front.index',compact('bolumler'));

    }



    public function store(Request $request){

    

        $request->validate(
            [
                'bolum_id' => 'required',
                'name' => 'required',
                'surname' => 'required',
                'country' => 'required',
                'country_number' => 'required',
                'sehir' => 'required',
                'ilce' => 'required',
                'adres' => 'required',
                'cep_number' => 'required',
                'email' => 'required|unique:students|email',
                'university' => 'required',
                'faculty' => 'required',
                'birim' => 'required',
                'Dateofstart' => 'required',
                'Dateoffinish' => 'required',
                'degree' => 'required',
                'alesBelge' => 'mimes:docx,pdf,jpg,bmp,png,doc',
                'kimlik' => 'required|mimes:docx,pdf,jpg,bmp,png,doc',
                'diploma' => 'required|mimes:docx,pdf,jpg,bmp,png,doc',
                'transkript' => 'required|mimes:docx,pdf,jpg,bmp,png,doc',
                'askerlikDurumuBelgesi' => 'mimes:docx,pdf,jpg,bmp,png,doc',
                'kvkk' => 'required',
                'g-recaptcha-response' => 'required'
              
            ],
        );
        
  
       $data = new Students();

       $data -> bolum_id = $request->input('bolum_id');
       $data -> name = $request->input('name');
       $data -> surname = $request->input('surname');
       $data -> country = $request->input('country');
       $data -> country_number = $request->input('country_number');
       $data -> askerlik_durumu = $request->input('askerlik_durumu');
       $data -> dg_tarihi = $request->input('dg_tarihi');
       $data -> sehir = $request->input('sehir');
       $data -> ilce = $request->input('ilce');
       $data -> cep_number = $request->input('cep_number');
       $data -> email = $request->input('email');
       $data -> adres = $request->input('adres');
       $data -> university = $request->input('university');
       $data -> faculty = $request->input('faculty');
       $data -> birim = $request->input('birim');
       $data -> Dateofstart = $request->input('Dateofstart');
       $data -> Dateoffinish = $request->input('Dateoffinish');
       $data -> degree = $request->input('degree');
       $data -> ales = $request->input('ales');
       $data -> yds = $request->input('yds');
       $data -> kvkk = $request->input('kvkk');
     
       
       $alesBelge =  $request->file('alesBelge');
       $name_alesBelge = 'ALES'.date('Ymdhis').'.'.$request->file('alesBelge')->getClientOriginalExtension();
       $alesBelge->move('Front/uploads/basvuru',$name_alesBelge); 
       $data->alesBelge = $name_alesBelge;
    

       $ydsBelge =  $request->file('ydsBelge');
       $name_ydsBelge = 'YDS'.date('Ymdhis').'.'.$request->file('ydsBelge')->getClientOriginalExtension();
       $ydsBelge->move('Front/uploads/basvuru',$name_ydsBelge); 
       $data->ydsBelge = $name_ydsBelge;

       $kimlik =  $request->file('kimlik');
       $name_kimlik = 'KIMLIK'.date('Ymdhis').'.'.$request->file('kimlik')->getClientOriginalExtension();
       $kimlik->move('Front/uploads/basvuru',$name_kimlik); 
       $data->kimlik = $name_kimlik;

       $diploma =  $request->file('diploma');
       $name_diploma = 'diploma'.date('Ymdhis').'.'.$request->file('diploma')->getClientOriginalExtension();
       $diploma->move('Front/uploads/basvuru',$name_diploma); 
       $data->diploma = $name_diploma;

       $transkript =  $request->file('transkript');
       $name_transkript = 'transkript'.date('Ymdhis').'.'.$request->file('transkript')->getClientOriginalExtension();
       $transkript->move('Front/uploads/basvuru',$name_transkript); 
       $data->transkript = $name_transkript;
  

       $askerlikDurumuBelgesi =  $request->file('askerlikDurumuBelgesi');
       $name_askerlik = 'as'.date('Ymdhis').'.'.$request->file('askerlikDurumuBelgesi')->getClientOriginalExtension();
       $askerlikDurumuBelgesi->move('Front/uploads/basvuru',$name_askerlik); 
       $data->askerlikDurumuBelgesi = $name_askerlik;



         $data->save();

        return redirect()->back()->with('status','Başvurunuz Alınmıştır');

    }
}
