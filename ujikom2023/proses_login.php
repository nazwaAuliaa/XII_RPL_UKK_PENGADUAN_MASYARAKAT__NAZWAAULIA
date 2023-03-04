<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root",);
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($data)   {
    $_SESSION["nik"]=$data["nik"];
    header('location:home.php');

    }else{
        header("location:loginf.php");
    }