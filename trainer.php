<?php
session_start();
require 'php/db.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
  header("Location: ../login.php");
  exit;
}

$result = mysqli_query($conn, "SELECT * FROM pelatih");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Trainer</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/trainer.css">
</head>
<body>

<!-- Navbar Admin -->
<div class="navbar-admin">
  <div class="logo">X GYM Admin</div>
  <nav>
    <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
    <a href="trainer.php" class="<?= basename($_SERVER['PHP_SELF']) == 'trainer.php' ? 'active' : '' ?>">Trainer</a>
    <a href="member.php" class="<?= basename($_SERVER['PHP_SELF']) == 'member.php' ? 'active' : '' ?>">Member</a>
    <a href="kontak.php" class="<?= basename($_SERVER['PHP_SELF']) == 'kontak.php' ? 'active' : '' ?>">Kontak</a>
    <a href="php/logout.php" class="logout">Logout</a>
  </nav>
</div>

<!-- Konten -->
<div class="container">
  <h2 class="mb-4 text-warning">📋 Data Trainer</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-dark align-middle text-center">
      <thead class="table-warning text-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Subject</th>
          <th>CV</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <form action="php/update_pelatih.php" method="post">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <td><?= $no++ ?></td>
              <td><input type="text" name="nama" value="<?= htmlspecialchars($row['nama']) ?>" class="form-control" required></td>
              <td><input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" class="form-control" required></td>
              <td><input type="text" name="subject" value="<?= htmlspecialchars($row['subject']) ?>" class="form-control" required></td>
              <td><a href="<?= htmlspecialchars($row['cv_path']) ?>" target="_blank" class="btn btn-info btn-sm">Lihat CV</a></td>
              <td>
                <div class="d-flex gap-1 justify-content-center">
                  <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
            </form>
            <form action="php/hapus_pelatih.php" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
                </div>
              </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
