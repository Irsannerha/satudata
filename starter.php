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
		
        <h1 class="mb-3">Starter page</h1>
		asdf
		asdf
		asdf
		asdfasdf

		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>

<?php
$db_connection->close(); // Menutup koneksi database
