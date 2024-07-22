<?php
include ("koneksi.php");

if (isset($_GET['p'])) {
    $hal = $_GET['p'];
} else {
    $hal = 'index';
}

// Sertakan welcome.php hanya jika halaman index
if ($hal == 'index') {
    include ('welcome.php');
}

// Sertakan file berdasarkan nilai $hal
switch ($hal) {
    case 'formBuku':
        include ('./buku/formBuku.php');
        break;
    case 'inputBuku':
        include ('./buku/inputBuku.php');
        break;
    case 'tabelBuku':
        include ('./buku/tabelBuku.php');
        break;
    case 'editBuku':
        include ('./buku/editBuku.php');
        break;
    case 'formEditBuku':
        include ('./buku/formEditBuku.php');
        break;
    case 'deleteBuku':
        include ('./buku/deleteBuku.php');
        break;

    case 'formAnggota':
        include ('./anggota/formAnggota.php');
        break;
    case 'inputAnggota':
        include ('./anggota/inputAnggota.php');
        break;
    case 'tabelAnggota':
        include ('./anggota/tabelAnggota.php');
        break;
    case 'editAnggota':
        include ('./anggota/editAnggota.php');
        break;
    case 'formEditAnggota':
        include ('./anggota/formEditAnggota.php');
        break;
    case 'deleteAnggota':
        include ('./anggota/deleteAnggota.php');
        break;

    case 'tabelPeminjaman':
        include ('./peminjaman/tabelPeminjaman.php');
        break;
    case 'formPeminjaman':
        include ('./peminjaman/formPeminjaman.php');
        break;
    case 'inputPeminjaman':
        include ('./peminjaman/inputPeminjaman.php');
        break;
    case 'editPeminjaman':
        include ('./peminjaman/editPeminjaman.php');
        break;
    case 'formEditPeminjaman':
        include ('./peminjaman/formEditPeminjaman.php');
        break;
    case 'deletePeminjaman':
        include ('./peminjaman/deletePeminjaman.php');
        break;

    default:
        // Sertakan halaman default jika $hal tidak cocok dengan kasus apa pun
        if ($hal != 'index') {
            include ('404.php'); // misalnya halaman 404 untuk not found
        }
        break;
}
