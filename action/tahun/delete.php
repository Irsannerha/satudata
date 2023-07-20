<?php
require_once("../../app/index.php");

// Cek data. Jika tidak ada, lempar ke dashboard.
if (!isset($_GET['id'])) {
    redirect("/");
    exit();
}

try {
    // Proses data.
    // Jalankan query delete.
    $id_tahun = $_GET['id'];
    query("DELETE FROM `tabel_tahun` WHERE `id_tahun` = $id_tahun");

    // Redirect.
    redirect("/tahun.php");
} catch (Throwable $e) {
    echo $e->getMessage();

    // Redirect.
    redirect("/tahun.php?error=operasi ditolak");
}
