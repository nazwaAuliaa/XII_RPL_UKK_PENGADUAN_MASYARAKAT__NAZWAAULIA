<?php
include "koneksii.php";
$id= $_GET['id_pengaduan'];
$tanggal = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$query = $koneksi->query("UPDATE `pengaduan` SET `id_pengaduan`='$id',`tgl_pengaduan`='$tanggal',`nik`='$nik',`isi_laporan`='$isi_laporan',`foto`='$foto' WHERE `id_pengaduan`='$id'");
move_uploaded_file($tmp_foto, '../img/' . $foto);
if($query){
    header("Location:tampilan.php");
}