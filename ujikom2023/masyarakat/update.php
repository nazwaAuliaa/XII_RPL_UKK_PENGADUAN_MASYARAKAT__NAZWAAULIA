<?php
include "koneksii.php";
$id= $_GET['id_pengaduan'];
$tanggal = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];
$query = $koneksi->query("UPDATE `pengaduan` SET `id_pengaduan`='$id',`tgl_pengaduan`='$tanggal',`nik`='$nik',`isi_laporan`='$isi_laporan',`foto`='$foto',`status`='$status' WHERE `id_pengaduan`='$id'");

if($query){
    header("Location:tampilan.php");
}