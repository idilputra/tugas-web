<?php
// Database connection
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $jumlah_praktikan = $_POST['jumlah_praktikan'];

    $sql = "INSERT INTO matakuliah (kode_mk, nama_mk, jumlah_praktikan) VALUES ('$kode_mk', '$nama_mk', '$jumlah_praktikan')";
    $conn->query($sql);
    header("Location: index.php");
}
?>

<form method="POST" action="create.php">
    <input type="number" name="kode_mk" placeholder="Kode MK" required>
    <input type="text" name="nama_mk" placeholder="Nama MK" required>
    <input type="number" name="jumlah_praktikan" placeholder="Jumlah Praktikan">
    <button type="submit">Add</button>
</form>
<a href="index.php">Back to list</a>
