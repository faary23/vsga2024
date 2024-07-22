<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Anggota</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="./styles/validate.css">
</head>

<body>
    <!-- Content -->
    <div class="container mt-5">
        <button type="button" class="btn btn-secondary my-2" onclick="history.back()">Back</button>
        <?php
        include ("./koneksi.php");
        $nim = $_GET['id'];
        $sql = "SELECT * FROM anggota WHERE nim = '$nim'";
        $query = mysqli_query($db, $sql);
        $r_tampil = mysqli_fetch_array($query);
        ?>
        <h2 class="card-title">Form Edit Anggota</h2>
        <form id="anggotaForm" action="index.php?p=editAnggota" method="post">
            <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" readonly value="<?php echo $r_tampil[0]; ?>" name="nim">
                    <span class="error" id="nimError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" value="<?php echo $r_tampil[1]; ?>" name="nama">
                    <span class="error" id="namaError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" value="<?php echo $r_tampil[2]; ?>" name="prodi">
                    <span class="error" id="prodiError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1"
                            value="Laki-laki" <?php echo ($r_tampil['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="jenis_kelamin1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                            value="Perempuan" <?php echo ($r_tampil['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="jenis_kelamin2">
                            Perempuan
                        </label>
                    </div>
                    <span class="error" id="jenisKelaminError"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor_telepon" value="<?php echo $r_tampil[4]; ?>"
                        name="nomor_telepon">
                    <span class="error" id="nomorTeleponError"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" value="<?php echo $r_tampil[5]; ?>" name="alamat">
                    <span class="error" id="alamatError"></span>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="./script/formEditAnggota.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>