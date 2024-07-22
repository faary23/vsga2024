<?php
include ("./koneksi.php");
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$sampul = $_POST['sampul'];

$sql = " UPDATE buku
SET  judul_buku = '$judul_buku', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', sampul = '$sampul'
WHERE id_buku = '$id_buku';";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil diubah!'); window.location='index.php?p=tabelBuku'</script>";
} else {
    echo "Data gagal tersimpan dalam database";
}
