<?php
require_once("./app/index.php");


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Dashboard | Satu Data Bandar Lampung</title>
	<?php require_once("./layouts/links.layout.php") ?>
</head>

<body>
	<?php require_once("./layouts/loader.layout.php") ?>
	<?php require_once("./layouts/header.layout.php") ?>
	<?php require_once("./layouts/sidebar.layout.php") ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<?php require_once("./components/cards/welcome.card.php") ?>

		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Dashboard</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">
								Dashboard
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
		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">75</div>
							<div class="font-14 text-secondary weight-500">
								OPD
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf">
								<i class="icon-copy fa fa-bank" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">124,551</div>
							<div class="font-14 text-secondary weight-500">
								DATA
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b">
								<i class="icon-copy bi bi-clipboard-data"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">400+</div>
							<div class="font-14 text-secondary weight-500">
								INDIKATOR
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon">
								<i class="icon-copy bi bi-send"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">Coming soon</div>
							<div class="font-14 text-secondary weight-500">Earning</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06">
								<i class="icon-copy bi bi-activity"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">DATA OPD & TAHUN</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Product</th>
						<th>Name</th>
						<th>Color</th>
						<th>Size</th>
						<th>Price</th>
						<th>Oty</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="table-plus">
							<img src="assets/vendors/images/product-1.jpg" width="70" height="70" alt="" />
						</td>
						<td>
							<h5 class="font-16">Shirt</h5>
							by John Doe
						</td>
						<td>Black</td>
						<td>M</td>
						<td>$1000</td>
						<td>1</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<img src="assets/vendors/images/product-2.jpg" width="70" height="70" alt="" />
						</td>
						<td>
							<h5 class="font-16">Boots</h5>
							by Lea R. Frith
						</td>
						<td>brown</td>
						<td>9UK</td>
						<td>$900</td>
						<td>1</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<img src="assets/vendors/images/product-3.jpg" width="70" height="70" alt="" />
						</td>
						<td>
							<h5 class="font-16">Hat</h5>
							by Erik L. Richards
						</td>
						<td>Orange</td>
						<td>M</td>
						<td>$100</td>
						<td>4</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<img src="assets/vendors/images/product-4.jpg" width="70" height="70" alt="" />
						</td>
						<td>
							<h5 class="font-16">Long Dress</h5>
							by Renee I. Hansen
						</td>
						<td>Gray</td>
						<td>L</td>
						<td>$1000</td>
						<td>1</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<img src="assets/vendors/images/product-5.jpg" width="70" height="70" alt="" />
						</td>
						<td>
							<h5 class="font-16">Blazer</h5>
							by Vicki M. Coleman
						</td>
						<td>Blue</td>
						<td>M</td>
						<td>$1000</td>
						<td>1</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="card-box pb-10">
			<div class="h5 pd-20 mb-0">DATA USERS</div>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus">Name</th>
						<th>Gender</th>
						<th>Weight</th>
						<th>Assigned Doctor</th>
						<th>Admit Date</th>
						<th>Disease</th>
						<th class="datatable-nosort">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo4.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Jennifer O. Oster</div>
								</div>
							</div>
						</td>
						<td>Female</td>
						<td>45 kg</td>
						<td>Dr. Callie Reed</td>
						<td>19 Oct 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Typhoid</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo5.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Doris L. Larson</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>76 kg</td>
						<td>Dr. Ren Delan</td>
						<td>22 Jul 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo6.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Joseph Powell</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>90 kg</td>
						<td>Dr. Allen Hannagan</td>
						<td>15 Nov 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Infection</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo9.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Jake Springer</div>
								</div>
							</div>
						</td>
						<td>Female</td>
						<td>45 kg</td>
						<td>Dr. Garrett Kincy</td>
						<td>08 Oct 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Covid 19</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo1.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Paul Buckland</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>76 kg</td>
						<td>Dr. Maxwell Soltes</td>
						<td>12 Dec 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Asthma</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo2.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Neil Arnold</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>60 kg</td>
						<td>Dr. Sebastian Tandon</td>
						<td>30 Oct 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo8.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Christian Dyer</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>80 kg</td>
						<td>Dr. Sebastian Tandon</td>
						<td>15 Jun 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">
							<div class="name-avatar d-flex align-items-center">
								<div class="avatar mr-2 flex-shrink-0">
									<img src="assets/vendors/images/photo1.jpg" class="border-radius-100 shadow"
										width="40" height="40" alt="" />
								</div>
								<div class="txt">
									<div class="weight-600">Doris L. Larson</div>
								</div>
							</div>
						</td>
						<td>Male</td>
						<td>76 kg</td>
						<td>Dr. Ren Delan</td>
						<td>22 Jul 2020</td>
						<td>
							<span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span>
						</td>
						<td>
							<div class="table-actions">
								<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div class="title pb-20 pt-20">
			<h2 class="h3 mb-0">Coming Soon All OUT DATA KOTA BANDAR LAMPUNG</h2>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Data Target 2023</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
		</div>

		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>
<?php
$db_connection->close(); // Menutup koneksi database
