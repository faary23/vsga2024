<?php
include ("./koneksi.php");
$nim = $_GET['id'];
$sql = "DELETE FROM peminjaman WHERE nim= '$nim'";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php?p=tabelPeminjaman'</script>";
} else {
    echo "Data gagal terhapus dalam database";
}
