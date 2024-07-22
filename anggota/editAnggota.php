<?php
include ("./koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

$sql = " UPDATE anggota
SET  nama = '$nama', prodi = '$prodi', jenis_kelamin = '$jenis_kelamin', nomor_telepon = '$nomor_telepon', alamat = '$alamat'
WHERE nim = '$nim';";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Data berhasil diubah!'); window.location='index.php?p=tabelAnggota'</script>";
} else {
    echo "Data gagal tersimpan dalam database";
}
