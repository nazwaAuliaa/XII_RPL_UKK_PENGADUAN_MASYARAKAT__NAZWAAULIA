<?php

session_start();

$tgl=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$islap=$_POST['isi_laporan'];
$foto=$_POST['foto'];
$status=$_POST['status'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("INSERT INTO `pengaduan`(`tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES ('$tgl','$nik','$islap','$foto','$status')");
 
 if($query){
    
    header("location:masyarakat.php");
 }