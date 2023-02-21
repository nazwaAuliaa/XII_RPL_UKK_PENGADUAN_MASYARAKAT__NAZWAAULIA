<?php
session_start();
?>
<!DOCTYP
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
    <div class="col"></div>
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4 mt-5">
        <ion-icon name="people" style="color: #709085;font-size:35px"></ion-icon>
          <span class="h3 fw-bold mb-0">PELAPORAN PENGADUAN MASYARAKAT</span>
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-2 pt-5 pt-xl-0 mt-xl-n5">
          <form action="loginf.php" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">R E G I S T E R</h3>

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example18">NIK</label>
              <input type="text" name="nik" id="form2Example18" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example28">NAMA</label>
              <input type="text" name="nama" id="form2Example28" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example28">USERNAME</label>
              <input type="text" name="username" id="form2Example28" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example28">Password</label>
              <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
            </div>

    
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

          </form>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>E html>