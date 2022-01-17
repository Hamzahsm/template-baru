<?php
$con = mysqli_connect("localhost", "u705028021_templatepilot", "templatepilot123NEW", "u705028021_templatepilot");
// Mengambil id
$id = $_GET['id'];
// Melakukan perintah query delete berdasarkan id dalam tabel gambar
$result = mysqli_query($con, "DELETE FROM pilot_categories WHERE id = $id");

if ($result) {
    echo "<script>alert('Data Telah Dihapus Dari Database');
            document.location.href = './categories.php'; </script>";
} else {
    echo "<script>alert('Oops, Gagal Menghapus Data');</script>";
}
//  Kembali kehalaman index.php
// header("location: dashboard-database-register-klien.php");
