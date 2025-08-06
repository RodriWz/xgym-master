<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);

    // Upload CV
    $uploadDir = "../uploads/";
    $cvFileName = basename($_FILES["cv"]["name"]);
    $targetFilePath = $uploadDir . $cvFileName;

    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFilePath)) {
        require 'db.php';
        $cvPath = "uploads/" . $cvFileName;
        $stmt = $conn->prepare("INSERT INTO pelatih (nama, email, subject, cv_path) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $email, $subject, $cvPath);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // ✅ Redirect langsung via PHP
        header("Location: ../about.php?success=1");
        exit;
    } else {
        // ❌ Gagal upload
        header("Location: ../about.php?success=0");
        exit;
    }
}
