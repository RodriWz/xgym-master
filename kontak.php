<?php
include 'php/db.php';

$success = '';

// Hapus data
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM kontak WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $success = "Data berhasil dihapus.";
    }
    $stmt->close();
}

// Update data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_id'])) {
    $id     = intval($_POST['update_id']);
    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $subjek = htmlspecialchars($_POST['subjek']);
    $pesan  = htmlspecialchars($_POST['pesan']);

    $stmt = $conn->prepare("UPDATE kontak SET nama = ?, email = ?, subjek = ?, pesan = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nama, $email, $subjek, $pesan, $id);
    if ($stmt->execute()) {
        $success = "Data berhasil diperbarui.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Kontak - X Gym</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/kontak.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<div class="navbar-admin">
  <div class="logo">X GYM Admin</div>
  <nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="trainer.php">Trainer</a>
    <a href="member.php">Member</a>
    <a href="kontak.php" class="active">Kontak</a>
    <a href="php/logout.php" class="logout">Logout</a>
  </nav>
</div>

<!-- Konten -->
<div class="container content-box">
  <h2 class="mb-4 text-warning">📥 Pesan Kontak Masuk</h2>

  <?php if ($success): ?>
    <div class="alert alert-success"><?= $success ?></div>
  <?php endif; ?>

  <div class="table-responsive">
    <table class="table table-bordered table-hover table-dark text-center align-middle">
      <thead class="table-warning text-dark">
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Subjek</th>
          <th>Pesan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM kontak ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)) {
          if (isset($_GET['edit']) && $_GET['edit'] == $row['id']) {
            echo "<form method='post'>
                    <tr>
                      <td><input type='text' name='nama' value='" . htmlspecialchars($row['nama']) . "' class='form-control' required></td>
                      <td><input type='email' name='email' value='" . htmlspecialchars($row['email']) . "' class='form-control' required></td>
                      <td><input type='text' name='subjek' value='" . htmlspecialchars($row['subjek']) . "' class='form-control' required></td>
                      <td><input type='text' name='pesan' value='" . htmlspecialchars($row['pesan']) . "' class='form-control' required></td>
                      <td>
                        <input type='hidden' name='update_id' value='" . $row['id'] . "'>
                        <button type='submit' class='btn btn-warning btn-sm'>Simpan</button>
                        <a href='kontak.php' class='btn btn-secondary btn-sm'>Batal</a>
                      </td>
                    </tr>
                  </form>";
          } else {
            echo "<tr>
                    <td>" . htmlspecialchars($row['nama']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['subjek']) . "</td>
                    <td>" . htmlspecialchars($row['pesan']) . "</td>
                    <td>
                      <a href='kontak.php?edit=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                      <a href='kontak.php?delete=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Hapus pesan ini?')\">Delete</a>
                    </td>
                  </tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
