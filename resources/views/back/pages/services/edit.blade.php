@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">{{ $services -> header_tr}} ' Adlı Projeyi Düzenle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('services.update') }}" method="POST" enctype="multipart/form-data">
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

                <div class="row">
                    <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Durumu</label>
 
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="status" {{$services ->status==0 ? "checked" : ""}} >
                         </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group mb-3 col-12">
                        
                        <label class="input-group-text" for="inputGroupSelect01">Hizmet Kategori</label>
                        <select class="form-select" id="inputGroupSelect01" name="servicesCategori_id">
                            <option value="{{ $services->getServicesCategori->id }}"   selected>{{ $services->getServicesCategori->servicesCategoryName_tr }}</option>
                           
                            

                            @foreach($servicesCategori as $servicesCategoris)
                            @if($services->getServicesCategori->servicesCategoryName_tr == $servicesCategoris->servicesCategoryName_tr )
                                @continue
                            @endif
                            <option value="{{ $servicesCategoris->id }}">{{ $servicesCategoris->servicesCategoryName_tr }}</option>
                        @endforeach



                        </select>
                    </div>
                </div>

                <input type="hidden" name="id" value="{{$services ->id}}">

                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Başlık - TR:</label>
                    <input type="text" name="header_tr" value="{{ $services -> header_tr}}" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Başlık - EN:</label>
                    <input type="text" name="header_en"  class="form-control" value="{{ $services -> header_en }}">
                </div>

            </div>

            
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Slug - TR:</label>
                    <input type="text" name="slug_tr"  class="form-control" value="{{ $services -> slug_tr }}">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Slug - EN:</label>
                    <input type="text" name="slug_en"  class="form-control" value="{{ $services -> slug_en }}">
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <p class="mb-1">Hizmet Resmi: --></p>
                            </div>
                            <div class="ms-auto fs-2 text-danger">
                                <img src="{{ asset('back/uploads/services/'.$services->image) }}" height="100px" width="100px" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
                <hr>
             </div>
             <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Icon:</label>
                    <input type="file" name="icon" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <p class="mb-1">Hizmet Icon: --></p>
                            </div>
                            <div class="ms-auto fs-2 text-danger">
                               <img src="{{ asset('back/uploads/services/'.$services->icon) }}" height="100px" width="100px" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
                <hr>
             </div>
    
              
           
          
          
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - TR:</label>
                    <textarea name="incontent_tr" id="" cols="40" class="form-control ckeditor" rows="10">{!! $services -> incontent_tr !!}</textarea>
                </div>
            </div>    
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - EN:</label>
                    <textarea name="incontent_en" id="" cols="40" class="form-control ckeditor" rows="10">{!! $services -> incontent_en !!}</textarea>
                 </div>
            </div>   

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>

        </form>
    </div>
</div>

@endsection