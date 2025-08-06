<?php
session_start();
$success = "";

if (isset($_SESSION['success_message'])) {
    $success = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Pendaftaran Gym</title>
  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

<div class="page-wrapper">

  <div class="form-wrapper">
    <div class="form-container">
      <h2>Form Pendaftaran Gym</h2>

      <?php if ($success): ?>
        <div class="success-message" style="color: yellow; margin-bottom: 1em;">
          <?= $success ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="php/proses_daftar.php">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="nohp">No. Handphone</label>
        <input type="tel" id="nohp" name="nohp" required>

        <label for="paket">Pilih Paket</label>
        <select id="paket" name="paket" required>
          <option value="">-- Pilih Paket --</option>
          <option value="reguler">Reguler - $ 10/bulan</option>
          <option value="vip">VIP - $ 25/bulan</option>
          <option value="vvip">VVIP - $ 45/bulan</option>
          <option value="ekstra_vip">EKSTRA VIP - $ 60/bulan</option>
        </select>

        <input type="submit" value="Daftar Sekarang">
      </form>

      <a href="index.php" class="btn-kembali">← Kembali</a>
    </div>
  </div>

</div>

</body>
</html>
