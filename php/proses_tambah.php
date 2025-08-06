<?php
include 'php/db.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$paket = $_POST['paket'];

mysqli_query($conn, "INSERT INTO member (nama, email, no_hp, paket) VALUES ('$nama', '$email', '$no_hp', '$paket')");
header("Location: ../member.php");
?>
