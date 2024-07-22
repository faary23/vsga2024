<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit Peminjaman</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/validate.css">
</head>
<body>

<!-- Content -->
<div class="container mt-5">
    <button type="button" class="btn btn-secondary my-2" onclick="history.back()">Back</button>
    <?php
        include ("./koneksi.php");
        $nim = $_GET['id'];
        $sql = "SELECT * FROM peminjaman WHERE nim = '$nim'";
        $query = mysqli_query($db, $sql);
        $r_tampil = mysqli_fetch_array($query);
        ?>
    <h2 class="card-title">Form Edit Peminjaman</h2>
    <form id="editPeminjamanForm" action="index.php?p=editPeminjaman" method="post">
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" readonly value="<?php echo $r_tampil[0]; ?>" name="nim">
                <span class="error" id="nimError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_buku" value="<?php echo $r_tampil[1]; ?>" name="id_buku">
                <span class="error" id="idBukuError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal_peminjaman" value="<?php echo $r_tampil[2]; ?>" name="tanggal_peminjaman">
                <span class="error" id="tanggalPeminjamanError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal_pengembalian" value="<?php echo $r_tampil[3]; ?>" name="tanggal_pengembalian">
                <span class="error" id="tanggalPengembalianError"></span>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" value="<?php echo $r_tampil[4]; ?>" name="status">
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
<script src="./script/formEditPeminjaman.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
