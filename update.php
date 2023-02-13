<?php

session_start();

$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$islap = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query = $db->query("UPDATE `pengaduan` SET `id_pengaduan`=$'id_pengaduan','$tgl',`nik`='$nik',`isi_laporan`='$islap',`foto`='$foto',`status`='$status' WHERE `id_pengaduan`='$id'");

if($query){
    header ("location:home.php");
}