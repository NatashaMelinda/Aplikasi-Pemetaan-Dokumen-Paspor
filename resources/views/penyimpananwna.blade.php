@extends('layouts.layout')

@section('title','penyimpananwna')

@section('content')

<div class="main-panel">
	<div class="content content-full">
				<div class="col-md-12">	
					<div class="page-inner">
						<div class="container">
							<div class="row">
								<div class="">
								<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
									<li class="nav-item col-sm-6 col-md-4" style="">
										<a class="card nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
											<div class="p-2">
												<img class="card-img-top rounded" src="assets/img/examples/aktif.png" alt="aktif">
											</div>
												<div class="card-body pt-2">
												<h4 class="mb-1 fw-bold" style="text-align-last: center">Dokumen Aktif</h4>
											</div>
										</a>
									</li>
									<li class="col-sm-6 col-md-4">
										<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
											<div class="p-2">
												<img class="card-img-top rounded" src="assets/img/examples/inaktif.png" alt="akif">
											</div>
											<div class="card-body pt-2">
												<h4 class="mb-1 fw-bold" style="text-align-last: center">Dokumen Inaktif</h4>
											</div>
										</a>
									</li>							
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Penyimpanan Dokumen WNA</h4>
								<div class="">
									<div class="form-group form-show-notify col-md-6">
										<label for="">Tahun : </label>
										<select class="form-control input-fixed" id="notify_state">
											<option value="default">2010/2020</option>
											<option value="primary">2020/2030</option>
										</select>
									</div>
								</div>
								<a href="create" class="btn btn-primary btn-round ml-auto" data-toggle=" ">
									<i class="fa fa-plus"> </i>
									Tambah Dokumen
								</a>
							</div>
						</div>
						<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
							<div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
								<div class="card-body">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables" class="display table table-striped table-hover" >
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
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1.</td>
														<td>36FNDFIWEUIWUE</td>
														<td>B5XXXXX8</td>
														<td>196201261989031003</td>
														<td>Natasha Melinda</td>
														<td>Pontianak</td>
														<td>2011/05/18</td>
														<td>RAK C 2983923</td>
														<td>Aktif</td>
														<td>
															<form col-md-12>
																<button type="button" class="btn-on btn-success btn-sm" id="alert_demo_3_3"> Pinjam</button>
																<button type="button" class="btn-on btn-danger btn-sm" id="alert_demo_5">Kembalikan</button>	
																<button type="button" class="btn-on btn-primary btn-sm">
																Detail
																</button>
															</form>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
								<div class="card-body">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables" class="display table table-striped table-hover" >
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
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1.</td>
														<td>36FNDFIWEUIWUE</td>
														<td>B5XXXXX8</td>
														<td>19620126989031003</td>
														<td>Lindung Siswanto</td>
														<td>Pontianak</td>
														<td>1984/06/11</td>
														<td>RAK C 2983923</td>
														<td>Inaktif</td>
														<td>
															<form col-md-12>
																<button type="button" class="btn-on btn-success btn-sm" id="alert_demo_3_3"> Pinjam</button>
																<button type="button" class="btn-on btn-danger btn-sm" id="alert_demo_5">Kembalikan</button>	
																<button type="button" class="btn-on btn-primary btn-sm">
																Detail
																</button>
															</form>
														</td>
													</tr>
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
	</div>
</div>

		<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>				
		<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>


<script>
//== Class definition
	var SweetAlert2Demo = function() {
														//== Demos
															var initDemos = function() {
															//== Sweetalert Demo 3
															$('#alert_demo_3_3').click(function(e) {
																swal("Dokument Berhasil Diambil!", {
																	icon : "success",
																	buttons: {        			
																		confirm: {
																			className : 'btn btn-success'
																		}
																	},
																});
															});
						
															//== Sweetalert Demo 5
															$('#alert_demo_5').click(function(e){
															swal({
															title: 'Masukan Nomor Paspor',
															html: '<br><input class="form-control" placeholder="Masukan Nomor Paspor" id="input-field">',
															content: {
															element: "input",
															attributes: {
															placeholder: "Masukan Nomor Paspor",
															type: "text",
															id: "input-field",
															className: "form-control"
														},
													},
														buttons: {
															cancel: {
															visible: true,
															className: 'btn btn-danger'
																	},        			
														confirm: {
														className : 'btn btn-success'
														}
													},
													}).then(
														function() {
														swal("Dokumen Berhasil Dikembalikan!", "Nomor Paspor : " + $('#input-field').val() , "success");
														}
															);
															});
						
															$('#alert_demo_8').click(function(e) {
																swal({
																	title: 'Are you sure?',
																	text: "You won't be able to revert this!",
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
    @endsection