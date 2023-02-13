<?php
session_start();

include('koneksi.php');
if(!isset($SESSION['username']))//.kalau.tidak.ada.session.username
{
    header("Location:loginf.php");

}
$query = $koneksi->query("SELECT * FROM masyarakat")->fetchA11();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-white">PENGADUAN MASYARAKAT</h1>
    <h4 class="text-white">MASYARAKAT</h4>
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
        <a class="nav-link text-dark" href="Isi_Data.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php" onclick="return confirm('anda yakin ingin keluar')">keluar</a>
       
      </li>
    </ul>
  </div>
</div>
<div style="padding: 50px;">
        <form action="data.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-10 offset-md-1">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">masyarakat</h2>
              <div class="mb-3 mt-3 text-center">
                nik: 
                <input class="rounded-3 border-light" type="nomer" name="nik" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                nama: 
                <input class="rounded-3 border-light" type="name" name="nama" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                username : 
                <input class="rounded-3 border-light" type="text" name="username" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                password: 
                <input class="rounded-3 border-light" type="password" name="password" style="width: 400px;">
                 </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Isi Data</button> 
                </div>
              </div>
            </form>
        </div>
      </body>
      </html>