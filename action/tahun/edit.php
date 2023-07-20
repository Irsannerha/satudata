<?php
require_once("../../app/index.php");

// Cek data. Jika tidak ada, lempar ke dashboard.
if (!isset($_POST['edit-tahun'])) {
    redirect("/");
    exit();
}

// Proses data.
$id_tahun = $_POST["id_tahun"]; // ID tahun yang akan diedit
$tahun = $_POST["tahun"]; // Nilai tahun yang baru

// Jalankan query update.
query("UPDATE `tabel_tahun` SET `tahun`='$tahun' WHERE `id_tahun`='$id_tahun'");

// Redirect.
redirect("/tahun.php");
