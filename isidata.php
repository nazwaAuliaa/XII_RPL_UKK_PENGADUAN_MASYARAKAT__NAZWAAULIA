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
<body style="background:abu">
    <div class="container mt-5">
    <h1 class="text-white">PENGADUAN MASYARAKAT</h1>
    <h4 class="text-white">Masyarakat</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="CP.php">Masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="Isi_Data.php">Isi Data</a>
        </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php" onclick="return confirm('anda yakin ingin keluar')"> keluar</a>
      </li>
    </ul>
  </div>
</div>
<div style="padding:50px">
<form action="data.php" method="post">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-6">
                    <form class="card-body cardbody-color p-lg-4 text-white" action="data.php" method="POST">
                        <div class="mb-3 mt-3 text-center">
                            nik : 
                            <input type="nomor" class="rounded-3 form-control" name="nik" 
                            placeholder="masukan nik" style="width:300px;margin:auto">
                        </div>
                        <div class="mb-3 mt-3 text-center">
                            nama : 
                            <input type="name" class="rounded-3 form-control" name="nama" 
                            placeholder="masukan nama" style="width:300px;margin:auto">
                        </div>
                        <div class="mb-3 mt-3 text-center">
                            username : 
                            <input type="text" class="rounded-3 form-control" name="username" 
                            placeholder="masukan username anda" style="width:300px;margin:auto">
                        </div>
                        <div class="mb-3 mt-3 text-center">
                            password : 
                            <input type="password" class="rounded-3 form-control" name="password" 
                            placeholder="masukan password anda" style="width:300px;margin:auto">
                        </div>
                        <div class="text-center mt-3">
                            telp : 
                            <input type="text" class="rounded-3 form-control" name="telp" 
                            placeholder="masukan telp anda" style="width:300px;margin:auto">

                            <input type="submit" value="Simpan" class="btn btn-success mb-3 px-3" 
                            style="width: 100px">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

</body>
</html>