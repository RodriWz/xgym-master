<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM pelatih WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Sukses hapus
            header("Location: ../trainer.php");
        } else {
            // Gagal hapus
            echo "Gagal menghapus data.";
        }

        $stmt->close();
    } else {
        echo "ID tidak ditemukan.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
