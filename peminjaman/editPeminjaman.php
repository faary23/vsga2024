<?php
include ("./koneksi.php");
$nim = $_POST['nim'];
$id_buku = $_POST['id_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status = $_POST['status'];

$sql = " UPDATE peminjaman
SET  id_buku = '$id_buku', tanggal_peminjaman = '$tanggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian', status = '$status'
WHERE nim = '$nim';";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil diubah!'); window.location='index.php?p=tabelPeminjaman'</script>";
} else {
    echo "Data gagal tersimpan dalam database";
}
