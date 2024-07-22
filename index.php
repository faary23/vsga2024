<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Perpustakaan Poliwangi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto"> <!-- ml-auto for right alignment -->
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php?p=index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php?p=tabelAnggota">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php?p=tabelBuku">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php?p=tabelPeminjaman">Peminjaman</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <?php
  include ("route.php");
  ?>


  <!-- Footer -->
  <footer class="bg-dark text-white p-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>About Us</h5>
          <p>Tak ada cahaya terang tanpa perpustakaan, di situlah harta ilmu dan budi pekerti terpancar.</p>
        </div>
        <div class="col-md-6 text-md-right">
          <h5>Contact</h5>
          <p>Email: infoperpustakaan@poliwangi.com</p>
          <p>Phone: (123) 456-7890</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>&copy; 2024 Perpustakaan Poliwangi. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>