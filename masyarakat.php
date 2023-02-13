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
    <form action="data.php"  method="POST">
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
                <input class="rounded-3 border-light" type="file" name="foto" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Status : 
                <input class="rounded-3 border-light" type="text" name="status" style="width: 400px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Simpan</button> 
                </div>
              </div>
            </form>
        </div>
</body>
</html>
</div>
</div>
</div>
</body>
</html>