<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PUSAT PELAPORAN MASYARAKAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#" role="button" data-bs-toggle="" aria-expanded="false">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Register</h2>
        <div class="text-center mb-5 text-dark"></div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://png.pngtree.com/png-vector/20190726/ourmid/pngtree-human-character-logo-sign-png-image_1602831.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="number" class="form-control" id="NIK" aria-describedby="NIK"
                placeholder="NIK">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="NAMA LENGKAP" aria-describedby="NAMA LENGKAP"
                placeholder="NAMA LENGKAP">
            </div>
            <div class="mb-3">
              <input type="date" class="form-control" id="tanggal lahir" placeholder="tanggal lahir">
            </div>
            <div class="mb-3">
              <input type="PASSWORD" class="form-control" id="PASSWORD" placeholder="PASSWORD">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="CONFIRM PASSWORD" placeholder="CONFIRM PASSWORD">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-dark px-5 mb-5 w-100">Register</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Have account?  <a href="login_petugas.php"> Login</a>
        </div>

      </div>
    </div>
  </div>

</div>
</div>
</body>
</html>