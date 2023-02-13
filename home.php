<?php
$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("SELECT * FROM `pengaduan`");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-danger sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-danger align-items-center sticky-top">
            <a href="" class="d-block p-3 text-decoration-none fs-3 text-light fw-bold">PPM</a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="home" class="fs-3"></ion-icon></a>Home
                    </li>
                    <li>
                        <a href="masyarakat.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="create" class="fs-3"></ion-icon></a>Isi Laporan
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="log-out" class="fs-3"></ion-icon></a>Log Out
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100">
            <!-- content -->
            <div class="container mt-5">
            <table class="table table-hover table-light">
  <thead>
        </div>
    </div>
</div>
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Tanggal Pengaduan</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
 
     <?php
     $no=1;
     foreach ($query as $query):?>
  <tbody>
  <tr>
    <td><?php echo $no;$no++;?></td>
    <td><?=$query['tgl_pengaduan']?></td>
    <td><?=$query['nik']?></td>
    <td><?=$query['isi_laporan']?></td>
    <td><img src="<?=$query['foto'];?>" widht="100" height="100"/></td>
    <td><?=$query['status']?></td>
<td>
    <a href="" class="btn btn-danger btn-sm">Update</a>
    <a href="delete.php?id_pengaduan=<?=$query['id_pengaduan'];?>" class="btn btn-danger mb-3 btn-sm text-white">Delete</a>
</td>
  </tr>
  </tbody>
  <?php endforeach ?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>