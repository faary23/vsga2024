<?php
include ("./koneksi.php");
$id_buku = $_GET['id'];
$sql = "DELETE FROM buku WHERE id_buku= '$id_buku'";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php?p=tabelBuku'</script>";
} else {
    echo "Data gagal terhapus dalam database";
}
