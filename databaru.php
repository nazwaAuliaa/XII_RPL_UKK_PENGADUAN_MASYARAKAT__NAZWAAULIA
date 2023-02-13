<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5"></div>
    <form action="masyarakat.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-10 offset-md-1">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">Isi Data</h2>
              <div class="mb-3 mt-3 text-center">
                Tanggal pengaduan : 
                <input class="rounded-3 border-light" type="date" name="tgl_pengaduan" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Nik : 
                <input class="rounded-3 border-light" type="text" name="nik" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Isi Laporan : 
                <input class="rounded-3 border-light" type="text" name="isi_laporan" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Foto : 
                <input class="rounded-3 border-light" type="url" name="foto" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Status : 
                <input class="rounded-3 border-light" type="" name="status" style="width: 400px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Simpan</button> 
                </div>
              </div>
            </form>
        </div>
</body>
</html>