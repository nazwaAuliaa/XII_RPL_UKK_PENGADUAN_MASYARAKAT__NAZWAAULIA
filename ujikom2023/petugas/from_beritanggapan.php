<?php
session_start();

$id = $_GET['id_pengaduan'];
$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("SELECT * FROM `tanggapan`");
$data = $query->fetchAll();

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
   
                        
                </ul>
            </div>
        </div>
        
    <?php foreach ($data as $data) : ?>
 
  <?php endforeach ?>
</ul>
</div>
        <div class="col">
    <form action="tanggapan.php?id_pengaduan=<?= $id ?>" method="POST" enctype='multipart/form-data'>
            <h1 class="mb-3 mt-3 ">Menanggapi</h1>
            <hr class="divider">
            <div class="container">
                
            <div class="row">
                <div class="col mt-3">
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
                </div>
                <div class="mb-3 mt-3">
                        Tanggapan : <textarea type="text" name="tanggapan" class="form-control"></textarea>
                </div>
                <div class="col">
                    <div class="mb-3">
                        Status : 
                        <select name="status">
                            <option class="selected" value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="beri_tanggapan.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            <div>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
</div>
</body>
</html>