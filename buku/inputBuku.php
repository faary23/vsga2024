<?php
include ("./koneksi.php");
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$sampul = $_POST['sampul'];

$sql = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit, sampul)
VALUES ('$id_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$sampul')";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='index.php?p=tabelBuku'</script>";
} else {
    echo "Data gagal tersimpan dalam database";
}
