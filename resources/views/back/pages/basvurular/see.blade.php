@extends('back.layouts.master')

@section('addcss')
<link href="{{ asset('back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection


@section('content-area')

<h6 class="mb-0 text-uppercase">Basvuruları Listele</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
					
						<div class="table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Öğrenci Bilgileri</th>
									
									</tr>
								</thead>
                            
								<tbody>
                                     
                                    <tr>  
                                        <td>Başurulan Bölüm :</td>
                                        <td>{{ $student -> getBolum -> bolum_adi}}</td>
                                    </tr>
                                    <tr>  
                                        <td>Adı Soyadı :</td>
                                        <td>{{ $student -> name." ".$student -> surname }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Ülke :</td>
                                        <td>{{ $student -> country }}</td>
                                    </tr>
                                    <tr>  
                                        <td>TC / Kimlik No :</td>
                                        <td>{{ $student -> country_number }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Askerlik Durumu :</td>
                                        @if($student -> askerlik_durumu == 1)
                                        <td>Yapıldı</td>
                                        @elseif($student -> askerlik_durumu == 2)
                                        <td>Yapılmadı</td>
                                        @elseif($student -> askerlik_durumu == 3)
                                        <td>Muaf</td>
                                        @else
                                        <td>Secim Yapılmamış</td>
                                        @endif
                                    </tr>
                                    <tr>  
                                        <td>Doğum Tarihi :</td>
                                        <td>{{ $student -> dg_tarihi }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Şehir :</td>
                                        <td>{{ $student -> sehir }}</td>
                                    </tr>
                                    <tr>  
                                        <td>İlçe :</td>
                                        <td>{{ $student -> ilce }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Cep Telefonu :</td>
                                        <td>{{ $student -> cep_number }}</td>
                                    </tr>
                                    <tr>  
                                        <td>E-Posta :</td>
                                        <td>{{ $student -> email }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Adres:</td>
                                        <td>{{ $student -> adres }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Üniversite :</td>
                                        <td>{{ $student -> university }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Fakülte :</td>
                                        <td>{{ $student -> faculty }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Bölüm :</td>
                                        <td>{{ $student -> birim }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Başlangıç Tarihi :</td>
                                        <td>{{ $student -> Dateofstart }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Mezuniyet Tarihi:</td>
                                        <td>{{ $student -> Dateoffinish }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Derece :</td>
                                        <td>{{ $student -> degree }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Ales Puanı:</td>
                                        @if (empty($student -> ales))
                                            <td>Değer Girilmemiş</td>
                                        @else
                                        <td>{{ $student -> ales }}</td>
                                        @endif
                                    </tr>
                                    <tr>  
                                        <td>Yabancı Dil Puanı</td>
                                        @if (empty($student -> yds))
                                        <td>Değer Girilmemiş</td>
                                    @else
                                    <td>{{ $student -> yds }}</td>
                                    @endif
                                    </tr>

                                    <tr>  
                                        <td>Ales Belge</td>
                                        @if (empty($student->alesBelge))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td>
                                        <a href="{{ asset('front/uploads/basvuru/'.$student->alesBelge) }}"  target="_blank">
                                        <button class="btn btn-sm btn-danger">İNDİR</button></a>
                                    </td>
                                     @endif
                                    </tr>


                                    <tr>  
                                        <td>Yabancı Dil Belge</td>
                                        @if (empty($student->ydsBelge))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td><a href="{{ asset('front/uploads/basvuru/'.$student->ydsBelge) }}"  target="_blank">
                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                    @endif
                                    </tr>

                                    <tr>  
                                        <td>Kimlik Belge :</td>
                                        <td><a href="{{ asset('front/uploads/basvuru/'.$student->kimlik) }}"  target="_blank">
                                            <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                    </tr>

                                    <tr>  
                                        <td>Diploma :</td>
                                        <td><a href="{{ asset('front/uploads/basvuru/'.$student->diploma) }}"  target="_blank">
                                            <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                        
                                    </tr>
                                    <tr>  
                                        <td>Transcript :</td>
                                        <td><a href="{{ asset('front/uploads/basvuru/'.$student->transkript) }}"  target="_blank">
                                            <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                    </tr>
                                    
                                    
                                    <tr>  
                                        <td>Askerlik Durum Belgesi</td>
                                        @if (empty($student->askerlikDurumuBelgesi))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td> <a href="{{ asset('front/uploads/basvuru/'.$student->askerlikDurumuBelgesi) }}"  target="_blank">
                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                    @endif
                                    </tr>
                                   
									
								</tbody>
							</table>







        
						</div>
					</div>
				</div>
				
				
@endsection

@section('addjs')

  <script src="{{ asset('back/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('back/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('back/js/table-datatable.js') }}"></script>
	


  <script>
    $(document).ready( function () {
        $('#datatable').DataTable({
            "dom": "<'row'<'col-sm-12 text-right mb-3'B>><'row'<'col-sm-6'l><'col-sm-6'f>>rtip",
            buttons: {
                name: 'primary',
                buttons: [
                    {extend:'copyHtml5', className:'btn btn-danger btn-sm text-white', text:'Kopyala'},
                    {extend:'excelHtml5', className:'btn btn-secondary btn-sm text-white', text:'Excel'},
                    {extend:'csvHtml5', className:'btn btn-primary btn-sm text-white', text:'CVS'},
                    {extend:'pdfHtml5', className:'btn btn-success btn-sm text-white', text:'PDF <i class="fa fa-file-pdf-o"></i>'},
                    { extend: 'print', className:'btn btn-danger btn-sm text-white', text:'Yazdır <i class="fa fa-print"></i>',
                        customize: function (win) {
                            $(win.document.body)
                                .css('font-size', '10pt')
                                .prepend(
                                    '<img src="http://ibb.co/heqCb7" style="position:absolute; top:0; left:0;" />'
                                );
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]
            },
            "lengthMenu": [[1, 10, 25, 50, 100, -1], [1, 10, 25, 50, 100, "Hepsi"]],
            "iDisplayLength":25,
            "pagingType": "full_numbers",
            "language": {
                "sDecimal":        ",",
                "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "sInfoEmpty":      "Kayıt yok",
                "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                "sInfoPostFix":    "",
                "sInfoThousands":  ".",
                "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sProcessing":     "İşleniyor...",
                "sSearch":         "Ara:",
                "sZeroRecords":    "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst":    "İlk",
                    "sLast":     "Son",
                    "sNext":     "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                }
            }
        });

        $('.dataTables_length select').select2({
            theme:"bootstrap",
            selectOnClose: true,
            language:"tr"
        });

        $('.dataTables_wrapper .dt-buttons').addClass('btn-group');


    } );
</script>


@endsection