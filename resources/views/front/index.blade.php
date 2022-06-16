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
    
  
   
     

          <h5 class="text-center" style="color: #172751">@lang('form.baslik')</h5>
          <div class="dropdown lang-dropdown mb-4">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                @lang('form.diller')
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
              <li> <a href="locale/en">@lang('form.en')</a></li>
              <li>  <a href="locale/tr">@lang('form.tr')</a></li>
            </ul>
          </div>
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
            <h5 class="mb-4 text-uppercase">@lang('form.kisisel_bilgiler')</h5>
            <div class="row">
                <div class="mb-3 col-12">

                    <label class="form-label"><span class="text-danger">* </span> @lang('form.bolumler')</label>
                    <select class="form-select mb-3" aria-label="Default select example"  name="bolum_id">
                        <option selected=""  disabled >@lang('form.seciniz')</option>
                        @foreach( $bolumler as $item)
                        <option value="{{$item -> id}}">{{$item ->bolum_adi}}</option>
                        @endforeach
                    </select>
                    <div class="bg-light-danger ml-3">{{$errors->first('bolum_id')}}</div> 
                </div>    
            </div>
      


            
            
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>@lang('form.ad')</label>
                    <input type="text" name="name"  value="{{ old('name') }}" class="form-control">
                 
                    
                    <div class="bg-light-danger ml-3">{{$errors->first('name')}}</div>
                   
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>@lang('form.soyad')</label>
                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('surname')}}</div>
                </div>
            </div>
                
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>@lang('form.ülke')</label>
                    <input type="text" name="country" value="{{ old('country') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('country')}}</div>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>@lang('form.tc')</label>
                    <input type="text" name="country_number" value="{{ old('country_number') }}"  class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('country_number')}}</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.askerlik_durumu')</label>
                    <select class="form-select mb-3" aria-label="Default select example"   name="askerlik_durumu">
                        <option selected="" disabled>@lang('form.seciniz')</option>
                        <option value="1">@lang('form.yapıldı')</option>
                        <option value="2">@lang('form.yapılmadı')</option>
                        <option value="3">@lang('form.muaf')</option>
                    </select>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.dogum_tarihi')</label>
                    <input type="date" name="dg_tarihi" value="{{ old('dg_tarihi') }}" class="form-control">
                </div>
            </div>

     
        


            <div class="row">
                <h5 class=" mt-4 mb-4 text-uppercase">@lang('form.iletisim_bilgileri')</h5>
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.sehir')</label>
                    <input type="text" name="sehir"  value="{{ old('sehir') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('sehir')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span>  @lang('form.ilce')</label>
                    <input type="text" name="ilce"  value="{{ old('ilce') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('ilce')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.cep_tel')</label>
                    <input type="text" name="cep_number"  value="{{ old('cep_number') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('cep_number')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.e-posta')</label>
                    <input type="email" name="email"  value="{{ old('email') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('email')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.adres')</label>
                    <input type="text" name="adres"  value="{{ old('adres') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('adres')}}</div>

                </div>
             </div>


            

            <h5 class=" mt-4 mb-4 text-uppercase">@lang('form.lisans_mezuniyet_bilgisi')</h5>

            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.universite')</label>
                    <input type="text" name="university"  value="{{ old('university') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('university')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.fakulte')</label>
                    <input type="text" name="faculty"  value="{{ old('faculty') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('faculty')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.birim')</label>
                    <input type="text" name="birim"  value="{{ old('birim') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('birim')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.baslangıc_tarihi')</label>
                       <input type="date" name="Dateofstart" value="{{ old('Dateofstart') }}" class="form-control">
                       <div class="bg-light-danger ml-3">{{$errors->first('Dateofstart')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.mezuniyet_tarihi')</label>
                    <input type="date" name="Dateoffinish" value="{{ old('Dateoffinish') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('Dateoffinish')}}</div>

                </div>
             </div>

             <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.derece')</label>
                    <input type="text" name="degree"  value="{{ old('degree') }}" class="form-control">
                    <div class="bg-light-danger ml-3">{{$errors->first('degree')}}</div>

                </div>
             </div>

           
            <h5 class=" mt-4 mb-4 text-uppercase">@lang('form.sinav_sonuclari')</h5>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"> @lang('form.ales')</label>
                    <input type="text" name="ales" value="{{ old('ales') }}"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.yabanci_dil')</label>
                    <input type="text" name="yds"  value="{{ old('yds') }}" class="form-control">
                </div>
             </div>




            <h5 class=" mt-4 mb-4 text-uppercase">@lang('form.yuklemeler')</h5>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.ales_belge')</label>
                    <input type="file" name="alesBelge"  value="{{ old('alesBelge') }}" class="form-control" id="inputGroupFile02">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.yabanci_dil_belge')</label>
                    <input type="file" name="ydsBelge"  value="{{ old('ydsBelge') }}" class="form-control" id="inputGroupFile02">
                </div>
             </div>
             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.kimlik_belge')</label>
                    <input type="file" name="kimlik" value="{{ old('kimlik') }}"  class="form-control" id="inputGroupFile02">
                    <div class="bg-light-danger ml-3">{{$errors->first('kimlik')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.diploma')</label>
                    <input type="file" name="diploma"  value="{{ old('diploma') }}" class="form-control" id="inputGroupFile02">
                    <div class="bg-light-danger ml-3">{{$errors->first('diploma')}}</div>

                </div>
             </div>
             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label"><span class="text-danger">* </span> @lang('form.traskript')</label>
                    <input type="file" name="transkript"  value="{{ old('transkript') }}" class="form-control" id="inputGroupFile02">
                    <div class="bg-light-danger ml-3">{{$errors->first('transkript')}}</div>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">@lang('form.askerlik_durum_belgesi')</label>
                    <input type="file" name="askerlikDurumuBelgesi" value="{{ old('askerlikDurumuBelgesi') }}" class="form-control" id="inputGroupFile02">
                </div>
             </div>

         
            <div class="form-check mb-3 col-12 mt-3">
                <input class="form-check-input" name="kvkk" type="checkbox" value="on" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"><a href="https://antalya.edu.tr/tr/kvkk-aydinlatma-metni"><span class="text-danger">* </span> @lang('form.kvkk')</label>
                    <div class="bg-light-danger ml-3">{{$errors->first('kvkk')}}</div>
                </div>
           

                <div class="g-recaptcha" name='g-recaptcha-response' data-sitekey="6LfYwHQgAAAAAFiMRGkKQ2bqq5s84Y2ZUDWhn2rR"></div>
                <div class="bg-light-danger ml-3">{{$errors->first('g-recaptcha-response')}}</div>


         <div class="form-group mb-3 mt-2">
            <button type="submit" class="btn btn-primary">@lang('form.basvur_buton')</button>
        </div>

        </form>
    </div>
</div>


@section('addjs')
    

@endsection

@endsection