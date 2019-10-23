<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="assets/js/main/jquery.min.js"></script>
	<script src="assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Alumnos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_horizontal.php" class="nav-link">Formulario</a></li>
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link active">Lista</a></li>
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Maestros</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.php" class="nav-link">Formulario</a></li>
								<li class="nav-item"><a href="datatable_api.php" class="nav-link">Lista</a></li>
							</ul>
						</li>
												
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Grupos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="datatable_grupo.php" class="nav-link">Lista</a></li>
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Materias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="datatable_materia.php" class="nav-link">Lista</a></li>
							</ul>
						</li>
																		
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Transporte</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_transporte.php" class="nav-link">Formulario</a></li>
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Tutorias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_tutoria.php" class="nav-link">Formulario</a></li>
								<li class="nav-item"><a href="datatable_tutoria.php" class="nav-link">Lista</a></li>
							</ul>
						</li>
						
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Alumnos</span> - Lista</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="datatable_basic.php" class="breadcrumb-item">Alumnos</a>
							<span class="breadcrumb-item active">Lista</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Lista de alumno</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="text-right" style="padding: 10px ">
		                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_horizontal"><i class="icon-cog3 mr-2"></i> Agregar</button>
	                </div>
					
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Matricula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Carrera</th>
								<th>Correo</th>
								<th>Celular</th>
								<th>Estado</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1930001</td>
								<td>Marth</td>
								<td>Enright</td>
								<td>ITI</td>
								<td>1930001@upv.edu.mx</td>
								<td>8341235341</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item class=" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930002</td>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td>ITM</td>
								<td>1930002@upv.edu.mx</td>
								<td>8347548532</td>
								<td><span class="badge badge-secondary">Inactivo</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930003</td>
								<td>Aura</td>
								<td>Hard</td>
								<td>ISA</td>
								<td>1930003@upv.edu.mx</td>
								<td>8342549865</td>
								<td><span class="badge badge-danger">Suspendido</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930004</td>
								<td>Nathalie</td>
								<td>Pretty</td>
								<td>ITI</td>
								<td>1930004@upv.edu.mx</td>
								<td>8343514789</td>
								<td><span class="badge badge-info">Pendiente</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930005</td>
								<td>Sharan</td>
								<td>Leland</td>
								<td>LAYGE</td>
								<td>1930005@upv.edu.mx</td>
								<td>8345684216</td>
								<td><span class="badge badge-secondary">Inactivo</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930006</td>
								<td>Maxine</td>
								<td>Woldt</td>
								<td>ISA</td>
								<td>1930006@upv.edu.mx</td>
								<td>8348965413</td>
								<td><span class="badge badge-info">Pendiente</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930007</td>
								<td>Sylvia</td>
								<td>Mcgaughy</td>
								<td>IM</td>
								<td>1930007@upv.edu.mx</td>
								<td>8347758988</td>
								<td><span class="badge badge-danger">Suspendido</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930008</td>
								<td>Lizzee</td>
								<td>Goodlow</td>
								<td>IM</td>
								<td>1930008@upv.edu.mx</td>
								<td>8347777541</td>
								<td><span class="badge badge-danger">Suspendido</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930009</td>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>ITI</td>
								<td>1930009@upv.edu.mx</td>
								<td>8342223589</td>
								<td><span class="badge badge-success">Activo</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>1930010</td>
								<td>Chantal</td>
								<td>Nailor</td>
								<td>ITI</td>
								<td>1930010@upv.edu.mx</td>
								<td>8346844754</td>
								<td><span class="badge badge-secondary">Inactivo</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal2"><i class="icon-pencil7"></i> Modificar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"><i class="icon-trash"></i> Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->
		
		<!-- Horizontal form modal -->
				<div id="modal_form_horizontal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Agregar alumno</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Nombre</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Eugene" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Apellido</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Kopyov" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Matricula</label>
										<div class="col-sm-9">
											<input type="text" placeholder="1001" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Contrasenia</label>
										<div class="col-sm-9">
											<input type="text" placeholder="contrasenia" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Carrera</label>
										<div class="col-sm-9">
											<input type="text" placeholder="ITI" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Email</label>
										<div class="col-sm-9">
											<input type="text" placeholder="eugene@kopyov.com" class="form-control">
											<span class="form-text text-muted">name@domain.com</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Celular</label>
										<div class="col-sm-9">
											<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
											<span class="form-text text-muted">+99-99-9999-9999</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Domicilio</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Ring street 12, building D, flat #67" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Ciudad</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Munich" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Estado</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Bayern" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Codigo Postal</label>
										<div class="col-sm-9">
											<input type="text" placeholder="1031" class="form-control">
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">Submit form</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /horizontal form modal -->
				
				<!-- Horizontal form modal2 -->
				<div id="modal_form_horizontal2" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Modificar alumno</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Nombre</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Eugene" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Apellido</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Kopyov" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Matricula</label>
										<div class="col-sm-9">
											<input type="text" placeholder="1001" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Contrasenia</label>
										<div class="col-sm-9">
											<input type="text" placeholder="contrasenia" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Carrera</label>
										<div class="col-sm-9">
											<input type="text" placeholder="ITI" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-sm-3">Email</label>
										<div class="col-sm-9">
											<input type="text" placeholder="eugene@kopyov.com" class="form-control">
											<span class="form-text text-muted">name@domain.com</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Celular</label>
										<div class="col-sm-9">
											<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
											<span class="form-text text-muted">+99-99-9999-9999</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Domicilio</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Ring street 12, building D, flat #67" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Ciudad</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Munich" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Estado</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Bayern" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Codigo Postal</label>
										<div class="col-sm-9">
											<input type="text" placeholder="1031" class="form-control">
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">Submit form</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /horizontal form modal2 -->
				
				<!-- Warning modal -->
				<div id="modal_theme_warning" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-warning">
								<h6 class="modal-title">Advertencia!</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Eliminar cuenta</h6>
								<p>Al hacer siguiente opcion la cuenta se eliminara completamente por siempre, estas seguro de seguir?</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-warning">Aceptar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /warning modal -->
				

	</div>
	<!-- /page content -->

</body>
</html>
