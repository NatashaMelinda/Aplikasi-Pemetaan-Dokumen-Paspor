<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="index.html" class="logo">
					<img src="assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">My Profile</a>
									<a class="dropdown-item" href="#">My Balance</a>
									<a class="dropdown-item" href="#">Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Logout</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="index.html">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Base</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Avatars</span>
										</a>
									</li>
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Avatars</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Buttons</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Grid System</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Panels</span>
										</a>
									</li>
									<li>
										<a href="components/notifications.html">
											<span class="sub-item">Notifications</span>
										</a>
									</li>
									<li>
										<a href="components/sweetalert.html">
											<span class="sub-item">Sweet Alert</span>
										</a>
									</li>
									<li>
										<a href="components/font-awesome-icons.html">
											<span class="sub-item">Font Awesome Icons</span>
										</a>
									</li>
									<li>
										<a href="components/flaticons.html">
											<span class="sub-item">Flaticons</span>
										</a>
									</li>
									<li>
										<a href="components/typography.html">
											<span class="sub-item">Typography</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Forms</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Basic Form</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Tables</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="tables/tables.html">
											<span class="sub-item">Basic Table</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Datatables</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-map-marker-alt"></i>
								<p>Maps</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="maps/googlemaps.html">
											<span class="sub-item">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Full Screen Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">JQVMap</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="far fa-chart-bar"></i>
								<p>Charts</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="charts/charts.html">
											<span class="sub-item">Chart Js</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Sparkline</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>Widgets</p>
								<span class="badge badge-count badge-success">4</span>
							</a>
						</li>
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#messages-app-nav">
								<i class="far fa-paper-plane"></i>
								<p>Messages App</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="messages-app-nav">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="messages.html">
											<span class="sub-item">Messages</span>
										</a>
									</li>
									<li>
										<a href="conversations.html">
											<span class="sub-item">Conversations</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a href="faqs.html">
								<i class="far fa-question-circle"></i>
								<p>Faqs</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-paint-roller"></i>
								<p>Custom Pages</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
									<li>
										<a href="login.html">
											<span class="sub-item">Login & Register 1</span>
										</a>
									</li>
									<li>
										<a href="login2.html">
											<span class="sub-item">Login & Register 2</span>
										</a>
									</li>
									<li>
										<a href="userprofile.html">
											<span class="sub-item">User Profile</span>
										</a>
									</li>
									<li>
										<a href="404.html">
											<span class="sub-item">404</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Menu Levels</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#subnav1">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#subnav2">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Level 1</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content content-full">
				<div class="page-navs bg-white">
					<div class="nav-scroller">
						<div class="nav nav-tabs nav-line nav-color-primary">
							<a class="nav-link active show" data-toggle="tab" href="#tab1">All
								<span class="count ml-1">(7)</span>
							</a>
							<a class="nav-link" data-toggle="tab" href="#tab2">Starred</a>
							<a class="nav-link" data-toggle="tab" href="#tab3">Trash</a>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="d-flex justify-content-between">
								<div class="d-md-inline-block">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text bg-white">
												<i class="fa fa-search search-icon"></i>
											</span>
										</div>
										<input type="text" class="form-control" aria-label="Text input with dropdown button">
										<div class="input-group-append">
											<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div role="separator" class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-success d-none d-sm-inline-block">New Message</button>
							</div>

							<section class="card mt-4">
								<div class="list-group list-group-messages list-group-flush">
									<div class="list-group-item unread">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star1" value="1">
												<label for="star1">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-online">
													<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Jimmy Denis</a>
													</h4>
													<p class="list-group-item-text text-truncate"> How are you? </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 16 minutes ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item unread">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star2" value="1" checked>
												<label for="star2">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-offline">
													<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Chad</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Ok, Thanks ! </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 20 minutes ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-away">
													<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Talha</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Follow up this reminder asap, quam error praesentium asperiores a quidem. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 2 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-offline">
													<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">John Doe</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Ready for the meeting today with client. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 2 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-online">
													<img src="assets/img/arashmil.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Arash Mil</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Hi Guys, minus, aliquam porro repudiandae numquam. Molestias. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 3 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item unread">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star1" value="1">
												<label for="star1">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-online">
													<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Jimmy Denis</a>
													</h4>
													<p class="list-group-item-text text-truncate"> How are you? </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 16 minutes ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item unread">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star2" value="1" checked>
												<label for="star2">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-offline">
													<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Chad</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Ok, Thanks ! </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 20 minutes ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-away">
													<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Talha</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Follow up this reminder asap, quam error praesentium asperiores a quidem. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 2 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-offline">
													<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">John Doe</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Ready for the meeting today with client. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 2 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item read">
										<div class="list-group-item-figure">
											<span class="rating rating-sm mr-3">
												<input type="checkbox" id="star3" value="1">
												<label for="star3">
													<span class="fa fa-star"></span>
												</label>
											</span>
											<a href="conversations.html" class="user-avatar">
												<div class="avatar avatar-online">
													<img src="assets/img/arashmil.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a href="conversations.html">Arash Mil</a>
													</h4>
													<p class="list-group-item-text text-truncate"> Hi Guys, minus, aliquam porro repudiandae numquam. Molestias. </p>
												</div>
												<div class="col-12 col-lg-2 text-lg-right">
													<p class="list-group-item-text"> 3 days ago </p>
												</div>
											</div>
										</div>
										<div class="list-group-item-figure">
											<div class="dropdown">
												<button class="btn-dropdown" data-toggle="dropdown">
													<i class="fa fa-ellipsis-v"></i>
												</button>
												<div class="dropdown-arrow"></div>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Mark as read</a>
													<a href="#" class="dropdown-item">Mark as unread</a>
													<a href="#" class="dropdown-item">Toggle star</a>
													<a href="#" class="dropdown-item">Trash</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<div class="mt-1 mb-2">
								<p class="text-muted"> Showing 1 to 10 of 1,000 entries </p>
								<ul class="pagination justify-content-center mb-5 mb-sm-0">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">
											<i class="fa fa-lg fa-angle-left"></i>
										</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">...</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">13</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">14</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">15</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">...</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">24</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-lg fa-angle-right"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
				<div class="title">Settings</div>
				<div class="custom-content">
					<div class="switcher">
						<div class="switch-block">
							<h4>Topbar</h4>
							<div class="btnSwitch">
								<button type="button" class="changeMainHeaderColor" data-color="blue"></button>
								<button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
								<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
								<button type="button" class="changeMainHeaderColor" data-color="green"></button>
								<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
								<button type="button" class="changeMainHeaderColor" data-color="red"></button>
							</div>
						</div>
						<div class="switch-block">
							<h4>Background</h4>
							<div class="btnSwitch">
								<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
								<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
								<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-toggle">
					<i class="flaticon-settings"></i>
				</div>
			</div>
		<!-- End Custom template -->
	</div>
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
	<!-- Azzara JS -->
	<script src="assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
</body>
</html>