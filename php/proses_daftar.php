<?php
session_start();

include 'db.php';

$nama  = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['nohp'];
$paket = $_POST['paket'];

$stmt = $conn->prepare("INSERT INTO member (nama_lengkap, email, no_hp, paket) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $email, $no_hp, $paket);

if ($stmt->execute()) {
    $_SESSION['success_message'] = "Terima kasih <strong>$nama</strong>, Anda telah mendaftar paket <strong>$paket</strong>!";
    header("Location: ../form.php");
    exit();
} else {
    echo "Gagal menyimpan data: " . $stmt->error;
}
?>
