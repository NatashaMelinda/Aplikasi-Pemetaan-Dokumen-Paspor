@extends('layouts.layout')

@section('title', 'datawna')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Data Dokumen</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="dashboard">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Datatables</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tabel Warga Negara Asing</h4>
                                <a href="{{ route('createwna') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success')}}
                        </div>
                        @endif
                        <div class="table_section padding_infor_info">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Permohonan</th>
                                            <th>Nomor Paspor</th>
                                            <th>Nomor KTP</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Penyimpanan</th>
                                            <th>Retensi Arsip</th>
                                            <th>Tanggal Input</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @php $no = 1; @endphp
                                        @forelse ($dokumenswna as $dokumenwna)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $dokumenwna->nomor_permohonan }}</td>
                                                <td>{{ $dokumenwna->nomor_paspor }}</td>
                                                <td>{{ $dokumenwna->nomor_ktp }}</td>
                                                <td>{{ $dokumenwna->nama }}</td>
                                                <td>{{ $dokumenwna->tempat_lahir }}</td>
                                                <td>{{ $dokumenwna->tanggal_lahir }}</td>
                                                <td>{{ $dokumenwna->penyimpanan }}</td>
                                                <td>
                                                    {{ $dokumenwna->retensi_arsip == 'aktif' ? 'Dokumen Aktif' : 'Dokumen Inaktif' }}
                                                </td>
                                                <td>{{ $dokumenwna->tanggal_input }}</td>
                                                <td>
                                                    <form method="POST" action=" {{ route('destroywna',['dokumenwna' => $dokumenwna->id ]) }}">
														@csrf
                                                        @method('DELETE')
														<a href="{{ url('/editwna/'.$dokumenwna->id)}}"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm" onclick="confirmDelete('{{ route('destroywna', ['dokumenwna' => $dokumenwna->id]) }}')">Hapus</button>
                                                        {{-- <a class="btn btn-info btn-sm">Detail</a> --}}
															{{-- <input type="hidden" name="id" value=" "> --}}
															{{-- <button type="button" class="btn btn-xs btn-danger" id="alert_demo_8"><i class="fa fa-trash"></i> Hapus</button> --}}
                                                            
													</form>												
                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan='11' class="text-center">Tidak Ada Data</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                          $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                          });
                        });
                        </script>
                    <!--   Core JS Files   -->
                    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
                    <script src="assets/js/core/popper.min.js"></script>
                    <script src="assets/js/core/bootstrap.min.js"></script>
                    <!-- jQuery UI -->
	                <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	                <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	                <!-- Bootstrap Toggle -->
	                <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	                <!-- jQuery Scrollbar -->
	                <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
                    <!-- Datatables -->
	                <script src="assets/js/plugin/datatables/datatables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
                    <script src="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css"></script>
                    <!-- Sweet Alert -->
                    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
                    <!-- Azzara DEMO methods, don't include it in your project! -->
                    <script src="assets/js/setting-demo.js"></script>
                    <!-- Azzara JS -->
	                <script src="assets/js/ready.min.js"></script>
	                <!-- Azzara DEMO methods, don't include it in your project! -->
	                <script src="assets/js/setting-demo.js"></script>
                    <script>
                        function -(deleteUrl) {
                            swal({
                                title: 'Apakah Anda Yakin?',
                                text: "Anda yakin akan menghapus dokumen tersebut!",
                                type: 'warning',
                                buttons: {
                                    cancel: {
                                        visible: true,
                                        text: 'Tidak!',
                                        className: 'btn btn-danger'
                                    },
                                    confirm: {
                                        text: 'Yakin!',
                                        className: 'btn btn-success'
                                    }
                                }
                            }).then((willDelete) => {
                                if (willDelete) {
                                    // Tampilkan konfirmasi baru setelah klik "Yakin!"
                                    swal({
                                        title: "Dokumen Berhasil Dihapus!",
                                        icon: "success",
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    }).then(() => {
                                        // Redirect ke URL hapus jika dikonfirmasi
                                        window.location.href = deleteUrl;
                                    });
                                } else {
                                    swal("Dokumen Tidak Jadi Dihapus!", {
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    });
                                }
                            });
                        }


                        $(document).ready(function() {
			            $('#example').DataTable({
			            });

			$('#multi-filter-select').DataTable( {
				"pageLength": 1,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  $('#dataTable').DataTable();
</script>

@endsection
