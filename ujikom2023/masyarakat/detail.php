<?php

session_start();

$id_pengaduan=$_GET['id_pengaduan']; 
$db =new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');

$query = $db->query("SELECT * FROM `pengaduan` WHERE `id_pengaduan`='$id_pengaduan'");
$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>masyrakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> masyrakat</title>
</head>
<body style="background:black">
    <div class="container mt-5">
    <h1 class="text-white">PENGADUAN MASYARAKAT</h1>
    <h4 class="text-white">masyarakat</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="masyarakat.php">isi_laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">isi_data</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php" onclick="return confirm('anda yakin ingin keluar')"> keluar</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3">
    <div class="container mt-3">
        <div class="row fw-bold card">
            <div class="row g-2 align-items-center px-3 mb-3">
                <div class="col-auto">
                
             <form>
             <div class="col-auto">
                  <select name="ppm" class="form-control" style="width:100px" id="">                 
                    <option value="tanggal">tgl_pengaduan</option>                    
                    <option value="isi_laporan">isi_laporan</option>
                    <option value="foto">foto</option>
            
                    
                  </select>
                  
                </div>
              </div>
          </from>
        </div>
      </div>
</div>    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
    </tr>
  </thead>
  <?php $no=1;?>
 <?php foreach ($data as $row){?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $no;?></th>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="./../img/<?= $row['foto'];?>" width="100" height="100"/></td>
       <td>

    </td>
    </tr>
    </tbody>
    <?php $no++ ?>
    <?php } ?>
    </table>
    <hr>
    <hr2>Tanggapan</hr>
    <div class="">
        <?php
        $query = $db->query("select * from tanggapan where id_pengaduan='$id_pengaduan'");
        $data = $query->fetchAll();
        foreach($data as $data):
        ?>

        <h3><?=$data['id_petugas']?></h3>
        <div class="text-tanggapan"><?=$data['tanggapan']?></div>
    </div>
    <?php endforeach ?>
    </div>
  
    </div>
</body>
</html>