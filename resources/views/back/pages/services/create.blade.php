@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Hizmet Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger font-weight-bold">
                    {{$errors->first()}}
                </div>
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Başlık - TR:</label>
                    <input type="text" name="header_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Başlık - EN:</label>
                    <input type="text" name="header_en"  class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="input-group mb-3 col-12">
                    
                    <label class="input-group-text" for="inputGroupSelect01">Hizmet Kategori</label>
                    <select class="form-select" id="inputGroupSelect01" name="servicesCategori_id">
                        <option selected="" disabled>Hizmet Üst Kategorisi Seçiniz</option>
                        @foreach( $servicesCategori as $item)
                        <option value="{{$item -> id}}">{{$item -> servicesCategoryName_tr}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Slug - TR:</label>
                    <input type="text" name="slug_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Slug - EN:</label>
                    <input type="text" name="slug_en"  class="form-control">
                </div>

            </div>
            <hr>
            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Icon:</label>
                    <input type="file" name="icon" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <hr>
          
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - TR:</label>
                    <textarea name="incontent_tr" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                </div>
            </div>    
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - EN:</label>
                    <textarea name="incontent_en" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                 </div>
            </div>   

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection