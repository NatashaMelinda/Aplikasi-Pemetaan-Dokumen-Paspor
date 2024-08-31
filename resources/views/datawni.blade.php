@extends('layouts.layout')

@section('title', 'datawni')

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
                                <h4 class="card-title">Tabel Warga Negara Indonesia</h4>
                                <a href="{{ route('create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
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
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($dokumens as $dokumen)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $dokumen->nomor_permohonan }}</td>
                                                <td>{{ $dokumen->nomor_paspor }}</td>
                                                <td>{{ $dokumen->nomor_ktp }}</td>
                                                <td>{{ $dokumen->nama }}</td>
                                                <td>{{ $dokumen->tempat_lahir }}</td>
                                                <td>{{ $dokumen->tanggal_lahir }}</td>
                                                <td>{{ $dokumen->penyimpanan }}</td>
                                                <td>
                                                    {{ $dokumen->retensi_arsip == 'aktif' ? 'Dokumen Aktif' : 'Dokumen Inaktif' }}
                                                </td>
                                                <td>{{ $dokumen->tanggal_input }}</td>
                                                <td>
                                                    <form id="alert_demo_8 {{ $dokumen->id }}" method="POST" action=" {{ route('destroy',['dokumen' => $dokumen->id ]) }}">
														@method('DELETE')
                                                        @csrf
                                                            <button class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $dokumen->id }}')">Hapus</button>
                                                            <a class="btn btn-success btn-sm" href="{{ url('/edit/'.$dokumen->id)}}">Edit</a>
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
                    <!--   Core JS Files   -->
                    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
                    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
                    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

                    <!-- Sweet Alert -->
                    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

                    <script>
                        //== Class definition
		                var SweetAlert2Demo = function() {

                        //== Demos
                        var initDemos = function() {
                            $('#alert_demo_8').click(function(e) {
					        swal({
						        title: 'Apakah Anda Yakin?',
						        text: "Dokumen Akan Terhapus!",
						        type: 'warning',
						        buttons:{
							        cancel: {
								        visible: true,
								        text : 'No, cancel!',
								        className: 'btn btn-danger'
							    },        			
							    confirm: {
								    text : 'Yes, delete it!',
								    className : 'btn btn-success'
							    }
						    }
					        }).then((willDelete) => {
						if (willDelete) {
							swal("Poof! Your imaginary file has been deleted!", {
								icon: "success",
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						} else {
							swal("Your imaginary file is safe!", {
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
</script>
{{-- <script>
    function confirmDelete(dokumenId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data akan dihapus secara permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + dokumenId).submit();
            }
        });
    }
</script> --}}
                    
                </div>
            </div>
        </div>
    </div>
@endsection
