<?php
include ("./koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO anggota (nim, nama, prodi, jenis_kelamin, nomor_telepon, alamat)
VALUES ('$nim', '$nama', '$prodi', '$jenis_kelamin', '$nomor_telepon', '$alamat')";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='index.php?p=tabelAnggota'</script>";
} else {
    echo "Data gagal tersimpan dalam database";
}
