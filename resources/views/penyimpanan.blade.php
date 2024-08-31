@extends('layouts.layout')

@section('title','penyimpanan')

@section('content')

		<div class="main-panel">
			<div class="content content-full">
				<div class="page-navs bg-white">
					<div class="nav-scroller">
						<div class="nav nav-tabs nav-line nav-color-primary d-flex align-items-center justify-contents-center w-100">
							<a class="nav-link active show" data-toggle="tab" href="#tab1">Semua Dokumen
								<span class="count ml-1">(3)</span>
							</a>
							<div class="ml-auto">
								<a href="#" class="btn btn-success">New Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="row row-projects">
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="assets/img/examples/aktif.jpg" alt="aktif">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold" style="text-align-last: center">Dokumen Aktif</h4>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="assets/img/examples/aktif.jpg" alt="aktif">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold" style="text-align-last: center">Dokumen Inaktif</h4>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-lg-4">
							<a href="#" class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="assets/img/examples/aktif.jpg" alt="akif">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold" style="text-align-last: center">Dokumen Musnah</h4>
								</div>
							</a>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Dokumen Aktif</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Dokumen
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tambah</span> 
														<span class="fw-light">
															Dokumen
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Masukan Data Sesuai KTP Pemohon</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nama</label>
																	<input id="addName" type="text" class="form-control" placeholder="masukan nama">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Nomor KTP</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="masukan nomor KTP">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Tahun Keluar Paspor</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="masukan tahun keluar paspor">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Nama</th>
													<th>Nomor Paspor</th>
													<th>Tahun Keluar Paspor</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												<tbody>
                                                    <tr>
                                                        <td colspan="10" align="center">Belum Ada Dokumen</td>
                                                    </tr>
                                                </tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection