<?php
require_once("../../app/index.php");

// Cek data. Jika tidak ada, lempar ke dashboard.
if (!isset($_POST['add-tahun'])) {
    redirect("/");
    exit();
}

// Mengambil jumlah data di database.
$year_query = query("SELECT id_tahun FROM tabel_tahun");

// Proses data.
$id_tahun = $year_query->num_rows + 1;
$tahun = $_POST["tahun"];

// Jalankan query insert.
query("INSERT INTO `tabel_tahun`(`id_tahun`, `tahun`) VALUES ('$id_tahun','$tahun')");

// Redirect.
redirect("/tahun.php");