<?php

$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");
$result = mysqli_query($db, "SELECT * FROM tanggapan");
// var_dump($result);
?>

<!doctype html>
<html lang="en">
  <head>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETUGAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
        <a class="btn btn-danger" href="logout.php" onclick="return confirm('anda yakin ingin keluar')">Logout</a>
    </div>
</nav>
</div>
</nav>
<footer class="page-footer white">
<div class="row align-items-center" style="margin-left: 500px; margin-right: 200px; margin-top: 100px;">
<h4>SELAMAT DATANG PETUGAS</h4>
</div>

<div class="row align-items-center" style=" margin-left: 200px; margin-right: 200px; margin-top: 45px;">
      <a type="button" class="btn btn-dark text-light" class="nav-link" href="beri_tanggapan.php">Memberikan Tanggapan</a>
</div>
<div class="row align-items-center" style=" margin-left: 200px; margin-right: 200px; margin-top: 20px;">
      <a type="button" class="btn btn-dark text-light" class="nav-link" href="validasi.php">Verifikasi dan Validasi</a>
</div>

          </div>
          <div class="footer-copyright black">
          </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

    
  </body>
</html>