<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\YukselLisansBolumler;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\FormSubmit; 
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\Mail;
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
              
                'name' => 'required',
                'surname' => 'required',
                'country' => 'required',
                'country_number' => 'required',
                'place_of_birth' => 'required',
                'dg_tarihi' => 'required',
                'sehir' => 'required',
                'cep_number_number' => 'required',
                'degree' => 'required',
                'email' => 'required|email',
                'adres' => 'required',
                'university' => 'required',
                'scholl_country' => 'required',
                'scholl_city' => 'required',
                'Dateoffinish' => 'required',
                'transkript' => 'mimes:docx,pdf,jpg,bmp,png,doc',
                'test_score' => 'required|mimes:docx,pdf,jpg,bmp,png,doc',
                'passport_photo' => 'required|mimes:docx,pdf,jpg,bmp,png,doc',
                'exam_file_i' => 'mimes:docx,pdf,jpg,bmp,png,doc',
                'kvkk' => 'required',
                'kvkk2' => 'required',
                'bolum_id' => 'required',
                'bolum_id_2' => 'required',
                              
            ],
        );
        
   
       $data = new Students();

       $data -> bolum_id = $request->input('bolum_id');
       $data -> bolum_id_2 = $request->input('bolum_id_2');
       $data -> name = $request->input('name');
       $data -> surname = $request->input('surname');
       $data -> country = $request->input('country');
       $data -> country_number = $request->input('country_number');
       $data -> place_of_birth = $request->input('place_of_birth');
       $data -> dg_tarihi = $request->input('dg_tarihi');
       $data -> sehir = $request->input('sehir');
       $data -> cep_number_number = $request->input('cep_number_number');
       $data -> email = $request->input('email');
       $data -> adres = $request->input('adres');
       $data -> degree = $request->input('degree');
       $data -> university = $request->input('university');
       $data -> scholl_country = $request->input('scholl_country');
       $data -> scholl_city = $request->input('scholl_city');
       $data -> Dateoffinish = $request->input('Dateoffinish');
       $data -> kvkk = $request->input('kvkk');
       $data -> kvkk2 = $request->input('kvkk2');
     
       

       if($request -> hasFile('transkript'))
        {
            $transkript =  $request->file('transkript');
            $name_transkript = $request->input('name').' '.$request->input('surname').'-'.'transkript'.date('Ymdhis').'.'.$request->file('transkript')->getClientOriginalExtension();
            $transkript->move('Front/uploads/basvuru',$name_transkript); 
            $data->transkript = $name_transkript;
         
        }
      
        if($request -> hasFile('test_score'))
        {
            $test_score =  $request->file('test_score');
            $name_test_score = $request->input('name').' '.$request->input('surname').'-'.'TS'.date('Ymdhis').'.'.$request->file('test_score')->getClientOriginalExtension();
            $test_score->move('Front/uploads/basvuru',$name_test_score); 
            $data->test_score = $name_test_score;
     
         
        }
    
        
        if($request -> hasFile('exam_file_i'))
        {
            $exam_file_i =  $request->file('exam_file_i');
            $name_exam_file_i = $request->input('name').' '.$request->input('surname').'-'.'EF'.date('Ymdhis').'.'.$request->file('exam_file_i')->getClientOriginalExtension();
            $exam_file_i->move('Front/uploads/basvuru',$name_exam_file_i); 
            $data->exam_file_i = $name_exam_file_i;
     
         
        }


         if($request -> hasFile('passport_photo'))
        {
            $passport_photo =  $request->file('passport_photo');
            $name_passport_photo = $request->input('name').' '.$request->input('surname').'-'.'PAS'.date('Ymdhis').'.'.$request->file('passport_photo')->getClientOriginalExtension();
            $passport_photo->move('Front/uploads/basvuru',$name_passport_photo); 
            $data->passport_photo = $name_passport_photo;
 
        }
    

      
         $data->save();     
         $email = $request->input('email');
         $content = [
           'name' => $request->name,
           'surname' => $request->surname,
       ];

           Mail::to($email)->cc('iso@antalya.edu.tr')->bcc('bt.destek@antalya.edu.tr')->send(new SendMail($content));
            return redirect()->back()->with('status','Your application has been received');

    }
}
