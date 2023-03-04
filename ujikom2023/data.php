<?php

session_start();

$tgl=$_POST['tgl_pengaduan'];
$islap=$_POST['isi_laporan'];
$foto=$_POST['foto'];
$nik=$_SESSION["nik"];
$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("INSERT INTO `pengaduan`(`tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES ('$tgl','$nik','$islap','$foto','$status')");
 
 if($query){
    
    header("location:masyarakat/tampilan.php");
 }