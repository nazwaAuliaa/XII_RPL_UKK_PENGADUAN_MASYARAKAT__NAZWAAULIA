<?php

session_start();

$tgl=$_POST['tgl_pengaduan'];
$islap=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$tmp_foto=$_FILES['foto']['tmp_name'];
// var_dump($_FILES);
// die();
$nik=$_SESSION["nik"];
$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("INSERT INTO `pengaduan`(`tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES ('$tgl','$nik','$islap','$foto','$status')");
   move_uploaded_file($tmp_foto, 'img/' . $foto);
 
 if($query){
    header("location:masyarakat/tampilan.php");
 }