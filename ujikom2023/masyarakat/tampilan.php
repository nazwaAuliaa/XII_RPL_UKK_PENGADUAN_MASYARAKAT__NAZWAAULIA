<?php

session_start();

$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");
$nik=$_SESSION["nik"];
$result = mysqli_query($db, "SELECT * FROM pengaduan where nik='$nik'");

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
        <a class="nav-link text-dark" href="tampilan.php">isi_laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">isi_data</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-dark" href="../logout.php" onclick="return confirm('anda yakin ingin keluar')"> keluar</a>
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
                  <select name="pengaduan masyarakat" class="form-control" style="width:100px" id="">                 
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
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $no=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $no;?></th>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="img/<?=$row['foto'];?>" width="100" height="100"/></td>
       <td>
       <a href="detail.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto">detail</a>
        <a href="fupdate.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto">hapus</a>
    </td>
    </tr>
    </tbody>
    <?php $no++ ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="isi_data.php" class="btn btn-primary">
      isi data
    </a>
    </div>
</body>
</html>