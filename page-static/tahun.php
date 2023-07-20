<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Data Tahun | Satu Data Bandar Lampung</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="assets/vendors/images/logo_bdl.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="assets/vendors/images/logo_bdl.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
		crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<img src="assets/vendors/images/logo_bdl.png" alt="" />
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here" />
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="assets/vendors/images/img.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/vendors/images/photo1.jpg" alt="" />
										<h3>Lea R. Frith</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/vendors/images/photo2.jpg" alt="" />
										<h3>Erik L. Richards</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/vendors/images/photo3.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/vendors/images/photo4.jpg" alt="" />
										<h3>Renee I. Hansen</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/vendors/images/img.jpg" alt="" />
										<h3>Vicki M. Coleman</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="assets/vendors/images/photo1.jpg" alt="" />
						</span>
						<span class="user-name">Admin</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://diskominfo.bandarlampungkota.go.id/" target="_blank"><img
						src="assets/vendors/images/github.svg" alt="" /></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-1" checked="" />
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-2" />
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-3" />
						<label class="custom-control-label" for="sidebaricon-3"><i
								class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-1" checked="" />
						<label class="custom-control-label" for="sidebariconlist-1"><i
								class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-2" />
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
								aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-3" />
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-4" checked="" />
						<label class="custom-control-label" for="sidebariconlist-4"><i
								class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-5" />
						<label class="custom-control-label" for="sidebariconlist-5"><i
								class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-6" />
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">
						Reset Settings
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="assets/vendors/images/satudata.png" alt="" class="dark-logo" />
				<img src="assets/vendors/images/satudata.png" alt="" class="light-logo" />
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-speedometer"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-speedometer"></span
								><span class="mtext">Dashboard</span>
							</a>
						</li> -->
					<li>
						<a href="opd.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-bank"></span><span class="mtext">OPD</span>
						</a>
					</li>
					<li>
						<a href="tahun.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-calendar4-week"></span><span class="mtext">Tahun</span>
						</a>
					</li>

					<li>
						<a href="users.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-clipboard-data"></span><span class="mtext">Satu Data</span>
						</a>
					</li>

					<li>
						<a href="users.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-users"></span><span class="mtext">Users</span>
						</a>
					</li>
					<li>
						<a href="report.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-pie-chart"></span><span class="mtext">Report</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-gear"></span><span class="mtext">Settings</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li>
								<a href="third-party-plugins.html">Third Party Plugins</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank"
							class="dropdown-toggle no-arrow">
							<span class="micon bi bi-layout-text-window-reverse"></span>
							<span class="mtext">Landing Page
								<img src="assets/vendors/images/coming-soon.png" alt="" width="25" /></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="assets/vendors/images/banner-img.png" alt="" />
				</div>
				<div class="col-md-8">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						Selamat Datang di Data Tahun
						<div class="weight-600 font-30 text-blue">Admin, Kavizaa!</div>
					</h4>
					<p class="font-18 max-width-600">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
						hic non repellendus debitis iure, doloremque assumenda. Autem
						modi, corrupti, nobis ea iure fugiat, veniam non quaerat
						mollitia animi error corporis.
					</p>
				</div>
			</div>
		</div>
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Dashboard</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Tahun</a></li>
							<li class="breadcrumb-item active" aria-current="page">
								Data Tahun
							</li>
						</ol>
					</nav>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
							Juli 2023
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Export List</a>
							<a class="dropdown-item" href="#">Policies</a>
							<a class="dropdown-item" href="#">View Assets</a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php
include('database/koneksi.php');

$sql = mysqli_query($conn, "SELECT id_tahun, tahun FROM tabel_tahun");
$result = $sql->num_rows;
?>

		<div class="card-box mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class="h4 pd-20">DATA TAHUN</h2>
				<button type="button" class="btn btn-primary btn-sm mr-4" data-toggle="modal" data-target="#addModal">
					+ Tambah Data
				</button>
			</div>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID Tahun</th>
						<th>Tahun</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
            if ($result > 0) {
                $counter = 1;
                while ($row = $sql->fetch_assoc()) {
                    $id_tahun = $row['id_tahun'];
                    $tahun = $row['tahun'];
            ?>
					<tr>
						<td><?php echo $counter; ?></td>
						<td>
							<h5 class="font-16"><?php echo $id_tahun; ?></h5>
						</td>
						<td><?php echo $tahun; ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#addModal"><i
											class="bi bi-plus-circle"></i> Add</a>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#viewModal"><i
											class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#" data-toggle="modal"
										data-target="#editModal<?php echo $id_tahun; ?>"><i class="dw dw-edit2"></i>
										Edit</a>
									<a id="sa-warning" class="dropdown-item sa-warning" href="#"
										data-id="<?php echo $tahun; ?>"><i class="dw dw-delete-3"></i> Delete</a>


								</div>
							</div>
						</td>
					</tr>
					<!-- Modal View -->
					<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="viewModalLabel">Data Tahun <?php echo $tahun; ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="invoice-wrap">
										<div class="invoice-box">
											<div class="invoice-header">
												<div class="logo text-center">
													<img src="assets/vendors/images/satudata.png" alt="" width="190"
														height="110" />
													<br>
													<br>
													<h4 class="text-center pb-10">PEMERINTAH KOTA BANDAR LAMPUNG</h4>
													<h4 class="text-center pb-10">DINAS KOMUNIKASI &amp; INFORMATIKA
														KOTA BANDAR LAMPUNG</h4>
													<h4 class="text-center pb-20">SATU DATA INDONESIA - KOTA BANDAR
														LAMPUNG</h4>
												</div>
											</div>
											<h4 class="text-center mb-30 weight-300"> DATA Tahun <?php echo $tahun; ?>
											</h4>
											<div class="row pb-30">
												<div class="col-md-6">
													<h5 class="mb-15">DATA TAHUN - <?php echo $tahun; ?></h5>
													<p class="font-14 mb-5">
														Tahun Data: <strong
															class="weight-600"><?php echo $tahun; ?></strong>
													</p>
													<p class="font-14 mb-5">
														No: <strong class="weight-600"><?php echo $id_tahun; ?></strong>
													</p>
												</div>
												<div class="col-md-6">
													<div class="text-right">
														<p class="font-14 mb-5">Pemerintah Daerah Kota Bandar Lampung
														</p>
														<p class="font-14 mb-5">Satu Data Kota Bandar Lampung</p>
														<p class="font-14 mb-5">Jl. Dr.Susilo No.2 Bandar Lampung, Kota
															Bandar Lampung</p>
														<p class="font-14 mb-5">Kota Bandar Lampung</p>
													</div>
												</div>
											</div>
											<div class="invoice-desc pb-30">
												<div class="invoice-desc-head clearfix">
													<div class="invoice-rate">
														<span class="weight-600">No</span>
													</div>
													<div class="invoice-sub">
														<span class="weight-600">ID Tahun</span>
													</div>
													<div class="invoice-subtotal">
														<span class="weight-600">Tahun</span>
													</div>
												</div>
												<div class="invoice-desc-body">
													<ul>
														<li class="clearfix">
															<div class="invoice-rate">
																<span class="weight-500"><?php echo $counter; ?></span>
															</div>
															<div class="invoice-sub">
																<span class="weight-500"><?php echo $id_tahun; ?></span>
															</div>
															<div class="invoice-subtotal">
																<span class="weight-500"><?php echo $tahun; ?></span>
															</div>
														</li>
													</ul>
												</div>
												<div class="invoice-desc-footer">
													<div class="invoice-desc-head clearfix">
														<div class="invoice-sub" style="font-style: italic;">Perhatian!
															Data Bersifat Rahasia.</div>
													</div>
													<div class="invoice-desc-body">
														<ul>
															<li class="clearfix">
																<div class="text-center pb-20">
																	Dikelola Oleh :
																	DINAS KOMUNIKASI &amp; INFORMATIKA KOTA BANDAR
																	LAMPUNG
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal Add -->
					<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="addModalLabel">Add Data Tahun</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="nama_opd">Tahun</label>
											<input type="text" class="form-control" id="nama_opd">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" onclick="saveData()">Save</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal Edit -->
					<div class="modal fade" id="editModal<?php echo $id_tahun; ?>" tabindex="-1" role="dialog"
						aria-labelledby="editModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editModalLabel">Edit Data Tahun</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="nama_opd<?php echo $id_tahun; ?>">ID Tahun</label>
											<input type="text" class="form-control"
												id="nama_opd<?php echo $id_tahun; ?>" value="<?php echo $id_tahun; ?>">
										</div>
										<div class="form-group">
											<label for="tahun<?php echo $tahun; ?>">Tahun</label>
											<input type="text" class="form-control" id="tahun<?php echo $tahun; ?>"
												value="<?php echo $tahun; ?>">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<?php
                    $counter++;
                }
            } else {
                echo "Tidak ada data.";
            }
            ?>
				</tbody>
			</table>
		</div>

		<?php
// Menutup koneksi database
$conn->close();
?>

		<div class="footer-wrap pd-20 mb-20 card-box">
			Satu Data Kota Bandar Lampung By
			<a href="https://diskominfo.bandarlampungkota.go.id/" target="_blank">DISKOMINFO KOTA BANDAR LAMPUNG</a>
		</div>
	</div>
	</div>
	<!-- welcome modal start -->
	<div class="welcome-modal">
		<button class="welcome-modal-close">
			<i class="bi bi-x-lg"></i>
		</button>
		<iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
		<div class="text-center">
			<h3 class="h5 weight-500 text-center mb-2">
				Open source
				<span role="img" aria-label="gratitude">❤️</span>
			</h3>
			<div class="pb-2">
				<a class="github-button" href="https://github.com/dropways/deskapp"
					data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
					data-size="large" data-show-count="true"
					aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
				<a class="github-button" href="https://github.com/dropways/deskapp/fork"
					data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-repo-forked"
					data-size="large" data-show-count="true"
					aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
			</div>
		</div>
		<div class="text-center mb-1">
			<div>
				<a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
					<span class="text-danger weight-600">STAR US</span>
					<span class="weight-600">ON GITHUB</span>
					<i class="fa fa-github"></i>
				</a>
			</div>
			<script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
		</div>
		<a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
			DOWNLOAD
			<i class="fa fa-download"></i>
		</a>
		<p class="font-14 text-center mb-1 d-none d-md-block">
			Available in the following technologies:
		</p>
		<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
			<i class="fa fa-html5"></i>
		</div>
	</div>
	<button class="welcome-modal-btn">
		<i class="fa fa-download"></i> Download
	</button>
	<!-- welcome modal end -->
	<!-- js -->
	<script src="assets/vendors/scripts/core.js"></script>
	<script src="assets/vendors/scripts/script.min.js"></script>
	<script src="assets/vendors/scripts/process.js"></script>
	<script src="assets/vendors/scripts/layout-settings.js"></script>
	<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="assets/vendors/scripts/dashboard3.js"></script>
	<script src="assets/vendors/scripts/index_dasboard.js"></script>

	<!-- add sweet alert js & css in footer -->
	<script src="assets/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="assets/plugins/sweetalert2/sweet-alert.init.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>
