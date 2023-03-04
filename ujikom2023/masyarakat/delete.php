<?php
session_start();

$id=$_GET["id_pengaduan"];
$db=new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query=$db->query("DELETE FROM `pengaduan` WHERE id_pengaduan='$id'");
if($query){
    header('location:tampilan.php');
}