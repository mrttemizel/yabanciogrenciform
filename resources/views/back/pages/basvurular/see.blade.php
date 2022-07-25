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
                                        <td>Başurulan Bölüm  1:</td>
                                        <td>{{ $student -> getBolum -> bolum_adi}}</td>
                                    </tr>
                                    <tr>  
                                        <td>Başurulan Bölüm  2:</td>
                                        <td>{{ $student -> getBolum2 -> bolum_adi}}</td>
                                    </tr>
                                    <tr>  
                                        <td>Ülke :</td>
                                        <td>{{ $student -> name.' '. $student -> surname }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Ülke Pasaport / Kimlik No :</td>
                                        <td>{{ $student -> country_number }}</td>
                                    </tr>
                                      <tr>  
                                        <td>Doğum Yeri :</td>
                                        <td>{{ $student -> place_of_birth }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Doğum Yeri :</td>
                                        <td>{{ $student -> dg_tarihi }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Şehir :</td>
                                        <td>{{ $student -> sehir }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Adres :</td>
                                        <td>{{ $student -> adres }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Telefon :</td>
                                        <td>{{ $student -> cep_number_number }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Email :</td>
                                        <td>{{ $student -> email }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Üniversite :</td>
                                        <td>{{ $student -> university }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Okul Ülke :</td>
                                        <td>{{ $student -> country }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Okul Şehir :</td>
                                        <td>{{ $student -> scholl_city }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Bitirme Tarihi :</td>
                                        <td>{{ $student -> Dateoffinish }}</td>
                                    </tr>
                                    <tr>  
                                        <td>Derece :</td>
                                        <td>{{ $student -> degree }}</td>
                                    </tr>

                                    <tr>  
                                        <td>Dier Sınav Belge</td>
                                        @if (empty($student->exam_file_i))
                                        <td>Belge Yüklenmemiş</td>
                                        @else
                                        <td>
                                            <a href="{{ route('belge.indir', [$student->exam_file_i]) }}"  target="_blank">                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                            </a>
                                        </td>
                                     @endif
                                    </tr>

                                    <tr>  
                                        <td>Pasaport Resmi :</td>
                                        @if (empty($student->passport_photo))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td>
                                            <a href="{{ route('belge.indir', [$student->passport_photo]) }}"  target="_blank">                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                           </a>
                                    </td>
                                     @endif
                                    </tr>

                                    <tr>  
                                        <td>Transkript :</td>
                                        @if (empty($student->transkript))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td>
                                            <a href="{{ route('belge.indir', [$student->transkript]) }}"  target="_blank">                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                            </a>
                                    </td>
                                     @endif
                                    </tr>

                                    <tr>  
                                        <td>Dil Sonucu :</td>
                                        @if (empty($student->test_score))
                                        <td>Belge Yüklenmemiş</td>
                                    @else
                                    <td>
                                            <a href="{{ route('belge.indir', [$student->test_score]) }}"  target="_blank">                                        <button class="btn btn-sm btn-danger">İNDİR</button></a></td>
                                            </a>
                                    </td>
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