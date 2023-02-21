<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root",);
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($data)   {
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
   
    header('location:beranda.php');
    }else{
        header("location:loginf.php");
    }