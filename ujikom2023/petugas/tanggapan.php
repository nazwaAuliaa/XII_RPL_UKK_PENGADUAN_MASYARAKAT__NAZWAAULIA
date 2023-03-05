<?php

session_start();


$idpeng = $_GET['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$tggpn = $_POST['tanggapan'];
$idpet = $_SESSION['id_petugas'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$data =$db->query("SELECT * FROM `pengaduan` WHERE id_pengaduan='$idpeng'")->fetch();
$query =$db->query("INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES (null,'$idpeng','$tgl','$tggpn','$idpet')");
if($data['status'] == ''){
    $status = $db->query("UPDATE `pengaduan` SET `status`= 'proses' WHERE id_pengaduan = '$idpeng'");
    header ("location:beri_tanggapan.php");
}elseif($data['status'] == 'proses'){
    $status = $db->query("UPDATE `pengaduan` SET `status`= 'selesai' WHERE id_pengaduan = '$idpeng'");
    header ("location:beri_tanggapan.php");
}
?>