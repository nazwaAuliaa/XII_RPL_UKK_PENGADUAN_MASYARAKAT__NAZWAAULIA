<?php

session_start();
$id = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$islap = $_POST['isi_laporan'];
$foto = $_POST['foto'];


$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query = $db->query("UPDATE `pengaduan` SET `tgl_pengaduan`='$tgl',`nik`='$nik',`isi_laporan`='$islap',`foto`='$foto' WHERE `id_pengaduan`='$id'");

if($query){
    header ("location:masyarakat.php");
}
