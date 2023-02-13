<?php

session_start();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pw = $_POST['password'];
$telp = $_POST['telp'];


$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("INSERT INTO masyarakat VALUES ('$nik','$nama','$user','$pw','$telp')");

if($query){

    header("location:flogin.php");
    }