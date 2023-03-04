<?php

session_start();

$id = $_GET['id_pengaduan'];

$db = new PDO('mysql:host=localhost;dbname=pengaduanmasyarakat','root','');
$query = $db->query("SELECT * FROM `pengaduan` WHERE  `id_pengaduan`='$id'");

$data = $query->fetch();

?>
<!DOCTYPE html>
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
            <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top">
                <a href="" class="d-block p-3 text-decoration-none fs-3 text-light fw-bold">PPM</a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="masyarakat.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="home" class="fs-3"></ion-icon></a>Home
                    </li>
                    <li>
                        <a href="pengaduan.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="create" class="fs-3"></ion-icon></a>Isi Laporan
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link px-0 align-middle" style="color:white"><ion-icon name="log-out" class="fs-3"></ion-icon></a>Log Out
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm min-vh-100">
            <!-- content -->
    
        <div class="container mt-2">
        <div class="row" >
        <div class="col">
            <h1 class="mb-3 mt-3  ">U P D A T E&nbsp; D A T A</h1>
            <hr class="divider">
            <form action="update.php?id_pengaduan=<?= $_GET['id_pengaduan']?>"  method="POST">
              <div class="mb-3 mt-4">
                Tanggal pengaduan : 
                <input class="rounded-3 form-control" type="date" name="tgl_pengaduan" value="<?= $data['tgl_pengaduan']?>" style="width: 60%;">
              </div>
              <div class="mb-3 mt-3 ">
               
                Nik : 
                <input class="rounded-3 form-control" type="number" name="nik" style="width: 60%;"  value="<?= $data['nik']?>">
              </div>
              <div class="mb-3 mt-3 ">
               
                Isi Laporan : 
                <input class="rounded-3 form-control" type="text" name="isi_laporan" style="width: 60%;"  value="<?= $data['isi_laporan']?>">
              </div>
              <div class="mb-3 mt-3 ">
                Foto : 
                <input class="rounded-3 form-control" type="file" name="foto" style="width: 60%;"  value="<?= $data['foto']?>">
              </div>
              <div class="mb-3 mt-3 ">
                  Status :
                  <select name="status" id="status" class="rounded-3 form-control">
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                  </select>
              </div>
              <div class="mb-3 mt-3 ">
               
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Simpan</button> 
                </div>
              </div>
            </form>
        </div>
</div>
</div>
</div>
</body>
</html>