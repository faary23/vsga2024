<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Peminjaman</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/validate.css">
</head>
<body>

<!-- Content -->
<div class="container mt-5">
    <button type="button" class="btn btn-secondary my-2" onclick="history.back()">Back</button>

    <h2 class="card-title">Form Peminjaman</h2>
    <form id="peminjamanForm" action="index.php?p=inputPeminjaman" method="post">
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
            <select class="form-control" id="nim" name="nim">
                  <option value="nim">Pilih NIM</option>
                  <?php
                    include('./koneksi.php');
                    $sql = "SELECT nim, nama FROM anggota";
                    $query = $db->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      echo "<option value='" . $row['nim'] . "'>" . $row['nim'] . " - " . $row['nama'] . "</option>";
                    }
                  ?>
                </select>
                <span class="error" id="nimError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
            <div class="col-sm-10">
            <select class="form-control" id="id_buku" name="id_buku">
                  <option value="id_buku">Pilih ID Buku</option>
                  <?php
                    include('./koneksi.php');
                    $sql = "SELECT id_buku, judul_buku FROM buku";
                    $query = $db->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      echo "<option value='" . $row['id_buku'] . "'>" . $row['id_buku'] . " - " . $row['judul_buku'] . "</option>";
                    }
                  ?>

                </select>
                <span class="error" id="idBukuError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal_peminjaman" placeholder="Ketikkan Tanggal Peminjaman" name="tanggal_peminjaman">
                <span class="error" id="tanggalPeminjamanError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal_pengembalian" placeholder="Ketikkan Tanggal Pengembalian" name="tanggal_pengembalian">
                <span class="error" id="tanggalPengembalianError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" placeholder="Ketikkan Status" name="status">
                <span class="error" id="statusError"></span>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="./script/formPeminjaman.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
