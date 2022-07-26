@extends('front.layouts.master')



@section('addcss')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<style>

.top-area{
   
    display: flex;
    justify-content: space-between;
    align-items: center

   
    
}

.top-area .lang-dropdown .dropdown-menu{
       
        width: 80px!important;
        max-width: 80px!important;
        min-width: 80px!important;
        background: #172751;
      
        
    }

    .lang-dropdown .btn{
        background: #172751;
        color:white;
    }
    .lang-dropdown .btn:hover{
        background: #00ACC8;
        color:white;
    }
    .lang-dropdown .btn:focus{
       box-shadow: none!important;
    }

    .lang-dropdown .dropdown-menu li a{

        color:white;
        display: block;
        text-align: center;
        
    }

    .lang-dropdown .dropdown-menu li a:hover{
background:#00ACC8; 
color:white;
display: block;
text-align: center;

}


</style>

@endsection


@section('content')
<img height="150" width="300" src="{{ asset('front/images/image.png') }}" alt="" class="mx-auto d-block">
<div class="top-area">
    
  
   
     

          <h5 class="text-center" style="color: #172751">Undergraduate Application Form</h5>
       
</div>






<div class="card">
    <div class="card-body">
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data" class="mpanel-form">
            @csrf
         
                            
                            @if(session('status'))
                            <div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show py-2">
                              <div class="d-flex align-items-center">
                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="ms-3">
                                  <div class="text-success">{{ session('status') }}</div>
                                </div>
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                             
                             @endif 
            <h5 class="mb-4 text-uppercase">PERSONAL DETAILS</h5>
          
      


            
            
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Name</label>
                    <input type="text" name="name"  value="{{ old('name') }}" class="form-control">
                 
                    
                    <div class="bg-light-danger ml-3">{{$errors->first('name')}}</div>
                   
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Surname</label>
                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('surname')}}</div>
                </div>
            </div>
                
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Country</label>
                    <input type="text" name="country" value="{{ old('country') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('country')}}</div>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Passport No / Nationality ID</label>
                    <input type="text" name="country_number" value="{{ old('country_number') }}"  class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('country_number')}}</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Place of Birth</label>
                    <input type="text" name="place_of_birth" value="{{ old('place_of_birth') }}"  class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('place_of_birth')}}</div>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Date of Birth</label>
                    <input type="date" name="dg_tarihi" value="{{ old('dg_tarihi') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('dg_tarihi')}}</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span> Passaport Photo</label>
                    <input type="file" name="passport_photo"  value="{{ old('passport_photo') }}" class="form-control" id="inputGroupFile02">
                    <div class="bg-light-danger ml-3">{{$errors->first('passport_photo')}}</div>

                </div>
            </div>
     
        


            <div class="row">
                <h5 class=" mt-4 mb-4 text-uppercase">CONTACT DETAILS</h5>
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Country</label>
                    <input type="text" name="sehir"  value="{{ old('sehir') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('sehir')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Adress</label>
                    <input type="text" name="adres"  value="{{ old('adres') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('adres')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Phone Number</label>
                    <input type="text" name="cep_number_number"  value="{{ old('cep_number_number') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('cep_number_number')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Email</label>
                    <input type="email" name="email"  value="{{ old('email') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('email')}}</div>

                </div>
             </div>

           

            

            <h5 class=" mt-4 mb-4 text-uppercase">HIGH SCHOOL INFORMATION</h5>

            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span>High School</label>
                    <input type="text" name="university"  value="{{ old('university') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('university')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Country</label>
                    <input type="text" name="scholl_country"  value="{{ old('scholl_country') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('scholl_country')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>City</label>
                    <input type="text" name="scholl_city"   value="{{ old('scholl_city') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('scholl_city')}}</div>

                </div>
             </div>

             <div class="row">
            

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Year of Graduation</label>
                    <input type="date" name="Dateoffinish" value="{{ old('Dateoffinish') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('Dateoffinish')}}</div>
                    
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>Graduation Degree</label>
                    <input type="text" name="degree"  value="{{ old('degree') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('degree')}}</div>

                </div>
             </div>

             <div class="row">
                
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span>Official Transcript "3 Years"</label>
                    <input type="file" name="transkript" value="{{ old('transkript') }}"  class="form-control" id="inputGroupFile02">
                    <div class="bg-light-danger ml-3">{{$errors->first('transkript')}}</div>
                </div>
             </div>

           
            <h5 class=" mt-4 mb-4 text-uppercase">TEST SCORES AND DOCUMENTS</h5>

            <div class="row">
                <div class="mb-3 col-12">
                <label class="form-label"><span class="text-danger">* </span>If taken before, a copy of language proficiency exam result (e.g. TOEFL etc.)</label>
                <input type="file" name="test_score" value="{{ old('test_score') }}"  class="form-control" id="inputGroupFile02">
                <div class="bg-light-danger ml-3">{{$errors->first('test_score')}}</div>
                </div> 
              
             </div>

             <div class="row">
                <div class="mb-3 col-12">
                <label class="form-label">A copy of exam record acceptable by the university (e.g., SAT, ACT, A Level, etc.)</label>
                <input type="file" name="exam_file_i" id="exam_file_i" value="{{ old('exam_file_i') }}"  class="form-control" id="inputGroupFile02">
                <div class="bg-light-danger ml-3">{{$errors->first('exam_file_i')}}</div>
                </div> 
              
             </div>

             <h5 class=" mt-4 mb-4 text-uppercase">PROGRAM DETAILS</h5>
             <div class="row">
                <div class="mb-3 col-12">

                    <label class="form-label"><span class="text-danger">* </span>Preference 1 </label>
                    <select class="form-select" aria-label="Default select example"  name="bolum_id">
                        <option selected=""  disabled >Choose</option>
                        @foreach( $bolumler as $item)
                        <option value="{{$item -> id}}">{{$item ->bolum_adi}}</option>
                        @endforeach
                    </select>
                    <div class="bg-light-danger ml-3">{{$errors->first('bolum_id')}}</div> 
                </div> 
                <div class="mb-3 col-12">

                    <label class="form-label"><span class="text-danger">* </span>Preference 2</label>
                    <select class="form-select mb" aria-label="Default select example"  name="bolum_id_2">
                        <option selected=""  disabled >Choose</option>
                        @foreach( $bolumler as $item)
                        <option value="{{$item -> id}}">{{$item ->bolum_adi}}</option>
                        @endforeach
                    </select>
                    <div class="bg-light-danger ml-3">{{$errors->first('bolum_id')}}</div> 
                </div>   
            </div>
             
            <h5 class=" mt-4 mb-4 text-uppercase">APPLICATION STATUS</h5>
            <div class="form-check mb-3 col-12 mt-3">
                <input class="form-check-input" name="kvkk2" type="checkbox" value="on" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"><a href="#"><span class="text-danger">* </span>I Confirm that,
                    1. I will bring all required documents for the final registration.
                    2. If my GPA will be less than 2.5 the University has the complete right to deduct my scholarship (If available)as per the condition stated in the tuition fees information.
                    3. If I don't get equivalency from the Ministry of Education in Turkey the University won't take any responsibility and can cancel the registration.
                    4. I will require my deposit fees only in case of visa rejection confirmed from the embassy.
                    5. Tuition fees are paid at beginning of each academic year.
                    6. Tuition fees are non-refundable.</label>
                    <div class="bg-light-danger ml-3">{{$errors->first('kvkk2')}}</div>
            </div>

           
         
            <div class="form-check mb-3 col-12 mt-3">
                <input class="form-check-input" name="kvkk" type="checkbox" value="on" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"><a href="https://antalya.edu.tr/tr/kvkk-aydinlatma-metni"><span class="text-danger">* </span> @lang('form.kvkk')</label>
                    <div class="bg-light-danger ml-3">{{$errors->first('kvkk')}}</div>
            </div>
           
           
                


         <div class="form-group mb-3 mt-2">
            <button type="submit" class="btn btn-primary">SEND</button>
        </div>

        </form>
    </div>
</div>


@section('addjs')


@endsection

@endsection