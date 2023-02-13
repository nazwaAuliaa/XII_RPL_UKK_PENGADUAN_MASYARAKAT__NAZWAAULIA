<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($query->rowCount()>0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['level']=$data['level'];
    header('location:home.php');
    }else{
        header("location:loginf.php");
    }