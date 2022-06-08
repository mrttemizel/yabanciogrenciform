@extends('back.layouts.master')



@section('content-area')

<div class="row">
              <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                  <div class="card-body">
                      <h5 class="mb-0">Profilimi Düzenle</h5>
                      <hr>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">PERSONEL BİLGİLERİM</h6>
                        </div>
                        <div class="card-body">
                          
                          <form class="row g-3" action="{{ route('user.profilupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger font-weight-bold">
                                    {{$errors->first()}}
                                </div>
                            @endif
                            @if(session('status'))
                                <h6 class="alert alert-success">{{ session('status') }}</h6>
                            @endif
                            <input type="hidden" name="id" value="{{ $data->id}}">
                             <div class="col-12">
                              <label class="form-label">E-Posta Adresi</label>
                              <input type="text" class="form-control" name="email" value="{{ $data->email}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="name" value="{{ $data->name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Kullanıcı Özeti</label>
                                <input type="text" class="form-control" name="summary" value="{{ $data->summary}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Profil Resmi:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            
                            <div class="text-start">
                                <button type="submit" class="btn btn-sm btn-primary px-2">Güncelle</button>
                              </div>
                          </form>
                        </div>
                      </div>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">Şifre Değiştir</h6>
                        </div>
                        <div class="card-body">
                          <form class="row g-3" action="{{ route('user.editpassword')}}" method="POST">
                            @csrf
                         

                        <input type="hidden" name="id" value="{{ $data->id}}">
                            <div class="col-12">
                                <label class="form-label">Kullanılan Şifre</label>
                                <input type="password" class="form-control" name="oldpassword">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Yeni Şifre</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Yeni Şifre Tekrar</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-sm  btn-primary px-2">Şifre Değiştir</button>
                              </div>
                          </form>
                        </div>
                      </div>
                      
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                  <div class="card-body">
                      <div class="profile-avatar text-center">
                        <img src="{{ asset('back/uploads/userprofil/'.$data->image) }}" class="rounded-circle shadow" width="120" height="120" alt="">
                      </div>
                  
                      <div class="text-center mt-4">
                        <h4 class="mb-1">{{$data->name}}</h4>
                        <div class="mt-4"></div>
                        <h6 class="mb-1">{{$data->summary}}</h6>
                        <p class="mb-0 text-secondary">ANTALYA BİLİM ÜNİVERSİTESİ</p>
                      </div>
                     
                    
                  </div>
                  
                </div>
              </div>
            </div>


@endsection