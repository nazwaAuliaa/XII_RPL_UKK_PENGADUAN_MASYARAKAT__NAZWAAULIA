<?php
session_start();
header ("location:home.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey">
    <div style="padding:50px">
<form action="register.php" method="post">
    <div class="text-center"><h1>PENGADUAN MASYRAKAT</h1></div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-6">
                    <form class="card-body cardbody-color p-lg-4 text-white">
                        <h2 class="mb-3 mt-4 text-center">R E G I S T E R</h2>
                        <div class="mb-3 mt-3 text-center">
                            NIK : 
                            <input type="text" class="rounded-3 form-control" name="nik" 
                            placeholder="masukan nik anda" style="width:300px;margin:auto">
                        </div>
                        <div class="mb-3 mt-3 text-center">
                            Nama : 
                            <input type="text" class="rounded-3 form-control" name="nama" 
                            placeholder="masukan nama anda" style="width:300px;margin:auto">
                        </div>
                        <div class="text-center mt-3">
                            <input type="submit" value="Register" class="btn btn-success mb-3 px-3" 
                            style="width:300px">
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