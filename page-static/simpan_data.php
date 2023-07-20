<?php
$conn = mysqli_connect("localhost", "root", "", "satu_data");

if (mysqli_connect_errno()) {
    echo "Connection failed : " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari request
    $nama_opd = $_POST["nama_opd"];
    $icon = $_POST["icon"];

    // Lakukan validasi jika diperlukan

    // Lakukan query untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO tabel_opd (nama_opd, icon) VALUES ('$nama_opd', '$icon')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Berhasil menyimpan data
        echo "Data berhasil disimpan";
    } else {
        // Gagal menyimpan data
        echo "Gagal menyimpan data";
    }
}
?>
