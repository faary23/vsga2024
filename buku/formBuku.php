<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="./styles/validate.css">
</head>

<body>

    <!-- Content -->
    <div class="container mt-5">
        <button type="button" class="btn btn-secondary my-2" onclick="history.back()">Back</button>

        <h2 class="card-title">Form Buku</h2>
        <form id="myForm" action="index.php?p=inputBuku" method="post">
            <div class="row mb-3">
                <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_buku" placeholder="Ketikkan Id Buku" name="id_buku">
                    <span class="error" id="idBukuError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" placeholder="Ketikkan Judul Buku"
                        name="judul_buku">
                    <span class="error" id="judulBukuError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis" placeholder="Ketikkan Nama Penulis"
                        name="penulis">
                    <span class="error" id="penulisError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" placeholder="Ketikkan Nama Penerbit"
                        name="penerbit">
                    <span class="error" id="penerbitError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun_terbit" placeholder="Ketikkan Tahun Terbit"
                        name="tahun_terbit">
                    <span class="error" id="tahunTerbitError"></span>
                </div>
            </div>
            <div class="mb-3">
                <label for="sampul" class="form-label">Foto Sampul</label>
                <input class="form-control" type="file" id="sampul" placeholder="Pilih Sampul" name="sampul">
                <span class="error" id="sampulError"></span>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="./script/formBuku.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>