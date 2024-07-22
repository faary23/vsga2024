<?php
include ("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Buku</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Content -->
  <div class="container mt-5">
    <div class="d-grid">
      <button type="button" class="btn btn-secondary my-2" onclick="history.back()">Back</button>
      <a href="index.php?p=formBuku" class="btn btn-success my-2">Tambah Buku</a>
    </div>

    <h2 class="card-title">Tabel Buku</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID Buku</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Sampul</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM buku";
        $query = mysqli_query($db, $sql);
        while ($r_tampil = mysqli_fetch_array($query)) {
          ?>
          <tr>
            <th scope="row"><?php echo $r_tampil[0]; ?></th>
            <td><?php echo $r_tampil[1]; ?></td>
            <td><?php echo $r_tampil[2]; ?></td>
            <td><?php echo $r_tampil[3]; ?></td>
            <td><?php echo $r_tampil[4]; ?></td>
            <td><img src="./images/<?php echo $r_tampil[5]; ?>" width="70" height="50"></td>
            <td>
              <button type="detail" class="btn btn-primary">Detail</button>
              <a href="index.php?p=formEditBuku&id=<?php echo $r_tampil['id_buku'];?>" class="btn btn-warning">Edit</a>
              <a href="index.php?p=deleteBuku&id=<?php echo $r_tampil['id_buku'];?>" type="delete" class="btn btn-danger" onclick="confirm('Apakah Anda Yakin ingin menghapusnya')"
                >Delete</a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>

  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>