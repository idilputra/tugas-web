<?php
// Database connection
include 'db_connect.php';

$kode_mk = $_GET['kode_mk'];
$sql = "SELECT * FROM matakuliah WHERE kode_mk = '$kode_mk'";
$record = $conn->query($sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mk = $_POST['nama_mk'];
    $jumlah_praktikan = $_POST['jumlah_praktikan'];

    $sql = "UPDATE matakuliah SET nama_mk='$nama_mk', jumlah_praktikan='$jumlah_praktikan' WHERE kode_mk='$kode_mk'";
    $conn->query($sql);
    header("Location: index.php");
}
?>

<form method="POST" action="update.php?kode_mk=<?= $kode_mk ?>">
    <input type="text" name="nama_mk" value="<?= $record['nama_mk'] ?>" required>
    <input type="number" name="jumlah_praktikan" value="<?= $record['jumlah_praktikan'] ?>">
    <button type="submit">Update</button>
</form>
<a href="index.php">Back to list</a>
