<?php
require_once("./app/index.php");

// Mengambil daftar tahun.
$years_query = query("SELECT id_tahun, tahun FROM tabel_tahun");


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Tahun | Satu Data Bandar Lampung</title>
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

		<div class="card-box mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class="h4 pd-20">DATA TAHUN</h2>
				<button type="button" class="btn btn-primary btn-sm mr-4" data-toggle="modal" data-target="#addModal">
					<span>+ Tambah Data</span>
				</button>
				<?php require_once("./components/modals/add.year.modal.php") ?>
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

					<!-- Jika data ada  -->
					<?php
						$year_counter = 1;
						while ($row = $years_query->fetch_assoc()) {
							// var_dump($row);
							// echo "<hr>";
							$id_tahun = $row['id_tahun'];
							$tahun = $row['tahun'];
					?>
					<tr>
						<td><?= $year_counter; ?>.</td>
						<td>
							<h5 class="font-16"><?= $id_tahun; ?></h5>
						</td>
						<td><?= $tahun; ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
									role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#viewModal"><i
											class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#" data-toggle="modal"
										data-target="#editModal<?= $id_tahun; ?>"><i class="dw dw-edit2"></i>
										Edit</a>
										<?php require_once("./components/modals/edit.year.modal.php") ?>
									<a id="sa-warning" class="dropdown-item sa-warning" href="action/tahun/delete.php?id=<?= $id_tahun ?>">
										<i class="dw dw-delete-3"></i>
										<span> Delete</span>
									</a>
								</div>
							</div>
						</td>
					</tr>
					<?php
						$year_counter++;
						}
					?>

					<!-- Jika data tidak ada -->
					<?php if ($years_query->num_rows === 0) { ?>
						<tr>
							<td>Data kosong!</td>
						</tr>
					<?php } ?>

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

					
				</tbody>
			</table>
		</div>

		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>
<?php
$db_connection->close(); // Menutup koneksi database