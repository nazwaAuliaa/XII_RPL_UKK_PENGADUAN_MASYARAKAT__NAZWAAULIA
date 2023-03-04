<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-2 d-none d-sm-inline">PENGADUAN MASYARAKAT</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0">
                        <ion-icon name="home" class="fs-3 text-light"></ion-icon> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="masyarakat.php" class="nav-link align-middle px-0">
                        <ion-icon name="create" class="fs-3 text-light"></ion-icon> <span class="ms-1 d-none d-sm-inline text-light">Isi Laporan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link align-middle px-0">
                        <ion-icon name="log-out" class="fs-3 text-light"></ion-icon><span class="ms-1 d-none d-sm-inline text-light">Logout</span>
                        </a>
                    </li>
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1">nazwa</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
<div class="col">
    <div style="padding: 10px;">
        <form action="../data.php"  method="POST" enctype='multipart/from-data'>
        <div class="container mt-2">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tgl_pengaduan</label>
  <input type="date" name="tgl_pengaduan" class="form-control" placeholder="Tanggal">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
  <textarea type="text" name="isi_laporan" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Foto</label>
  <input type="file" name="foto" class="form-control" >
</div>
<div class="text-end mt-3"> 
    <button type="submit" class="btn btn-primary px-3 mb-3 fw-bold" style="width: 100px;">Selesai</button> 
</div>
</div>
</body>
</html>