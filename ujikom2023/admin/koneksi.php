<?php

class koneksi{
    function getkoneksi(){
$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");

return new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
    }

}