@extends('back.layouts.master')

@section('addcss')
<link href="{{ asset('back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection


@section('content-area')

<h6 class="mb-0 text-uppercase">Basvuruları Listele</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						@if($errors->any())
						<div class="alert alert-danger font-weight-bold">
							{{$errors->first()}}
						</div>
					@endif
					@if(session('status'))
						<h6 class="alert alert-success">{{ session('status') }}</h6>
					@endif
						<div class="table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Adı Soyadı</th>
										<th>Bölüm</th>
										<th>AlES Puanı</th>
										<th>Derece</th>
										<th>YDS</th>
										<th>Düzenle</th>
									</tr>
								</thead>
                            
								<tbody>
                                     
									@foreach($students as $item)
                                    <tr>
                                       
                                    <td>{{ $item -> name." ".$item -> surname }}</td>
                                    <td>{{ $item -> getBolum -> bolum_adi}}</td>
									<td>{{ $item -> ales }}</td>
									<td>{{ $item -> yds }}</td>
									<td>{{ $item -> degree }}</td>
									
                                   
									<td>
										<div class="d-flex align-items-center gap-3 fs-6">
										  <a href="{{ route('basvurular.delete', ['id'=>$item->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
										  <a href="{{ route('basvurular.see', ['id'=>$item->id]) }}" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-eye-fill"></i></a>
										</div>
									  </td>	
                                    </tr>
                                     @endforeach 
									
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