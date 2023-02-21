<?php

include('koneksi.php');
if(!isset($SESSION['username']))//.kalau.tidak.ada.session.username
{
    header("Location:loginf.php");

}
$query = $koneksi->query("SELECT * FROM masyarakat")->fetchA11();

?>
