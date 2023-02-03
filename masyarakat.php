<?php

session_start();

$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");

$result = mysqli_query($db, "SELECT * FROM masyarakat");

//if(isset($_GET['caper'])){
 // $urut = $_GET['caper'];
  //$result =mysqli_query($db,"SELECT * FROM catatan_perjalanan ORDER BY $urut ASC");
   //}
// var_dump($result);
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
<body style="background:grey">
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
        <a class="nav-link text-dark" href="masyarakat.php">masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">Isi Data</a>
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
                <span class="text-black">Urutkan Berdasarkan</span>
             </div>
             <form>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:100px" id="">
                    <option value="tanggal">nik</option>
                    <option value="nama">nama</option>  
                    <option value="username">username</option>
                    <option value="password">password</option>
                    <option value="telp">telp</option>
                  </select>
                  <button type="submit" class="btn btn-primary">urut</button>
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
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nik'];?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['username'];?></td>
      <td><?=$row['password'];?></td>
      <td><?=$row['telp'];?></td>
      
      
      <td><a href="form_update.php?nik=<?=$row['nik'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?nik=<?=$row['nik'];?>" class="btn btn-sm btn-danger ml-auto">hapus</a>
    </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="isi_data.php" class="btn btn-primary">
      masysrakat
    </a>
    </div>
</body>
</html>