<?php
include 'php/db.php';
session_start();

if ($_SESSION['role'] != 'admin') {
  header("Location: form.php");
  exit();
}

// Tambah member
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tambah'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
  $paket = $_POST['paket'];

  $query = "INSERT INTO member (nama_lengkap, email, no_hp, paket, created_at) 
              VALUES ('$nama', '$email', '$no_hp', '$paket', NOW())";
  mysqli_query($conn, $query);
  header("Location: member.php");
  exit();
}

// Update member
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
  $paket = $_POST['paket'];

  $query = "UPDATE member SET 
                nama_lengkap='$nama', 
                email='$email', 
                no_hp='$no_hp', 
                paket='$paket' 
              WHERE id=$id";
  mysqli_query($conn, $query);
  header("Location: member.php");
  exit();
}

// Hapus member
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hapus'])) {
  $id = $_POST['id'];
  mysqli_query($conn, "DELETE FROM member WHERE id=$id");
  header("Location: member.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Admin Member - X Gym</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/member.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <div class="navbar-admin">
    <div class="logo">X Gym Admin</div>
    <nav>
      <a href="dashboard.php">Dashboard</a>
      <a href="trainer.php">Trainer</a>
      <a href="member.php" class="active">Member</a>
      <a href="kontak.php">Kontak</a>
      <a href="php/logout.php" class="logout">Logout</a>
    </nav>
  </div>

  <!-- Konten -->
  <div class="dashboard-overlay">
    <div class="member-list">

      <!-- Form Tambah -->
      <div class="member-card">
        <h3>Tambah Member Baru</h3>
        <form method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="no_hp" placeholder="No HP" required>
          <select name="paket" required>
            <option value="">-- Pilih Paket --</option>
            <option value="Reguler">Reguler</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option>
            <option value="Ekstra VVIP">Ekstra VVIP</option>
          </select>
          <button type="submit" name="tambah">Simpan</button>
        </form>
      </div>

      <!-- Daftar Member -->
      <?php
      $query = "SELECT * FROM member ORDER BY created_at DESC";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0):
        while ($row = mysqli_fetch_assoc($result)):
      ?>
          <div class="member-card">
            <form method="POST">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="text" name="nama" value="<?= htmlspecialchars($row['nama_lengkap']) ?>" required>
              <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required>
              <input type="text" name="no_hp" value="<?= htmlspecialchars($row['no_hp']) ?>" required>
              <select name="paket" required>
                <option value="Reguler" <?= $row['paket'] == 'Reguler' ? 'selected' : '' ?>>Reguler</option>
                <option value="VIP" <?= $row['paket'] == 'VIP' ? 'selected' : '' ?>>VIP</option>
                <option value="VVIP" <?= $row['paket'] == 'VVIP' ? 'selected' : '' ?>>VVIP</option>
                <option value="Ekstra VVIP" <?= $row['paket'] == 'Ekstra VVIP' ? 'selected' : '' ?>>Ekstra VVIP</option>
              </select>

              <div class="card-actions">
                <button type="submit" name="update" class="btn-edit">Simpan</button>
                <button type="submit" name="hapus" class="btn-delete" onclick="return confirm('Yakin ingin menghapus member ini?')">Hapus</button>
              </div>
            </form>

          </div>

    </div>
<?php
        endwhile;
      else:
        echo "<p class='no-data'>Belum ada member yang mendaftar.</p>";
      endif;
?>

  </div>
  </div>

</body>

</html>