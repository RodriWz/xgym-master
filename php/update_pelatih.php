<?php
require 'db.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];

mysqli_query($conn, "UPDATE pelatih SET nama='$nama', email='$email', subject='$subject' WHERE id=$id");
header("Location: ../trainer.php");
exit;
?>
