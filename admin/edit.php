<?php
include '../login/config.php';

// Ambil data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pendaftaran WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $pendaftaran = $result->fetch_assoc();
}

// Proses update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $ekstrakurikuler = $_POST['ekstrakurikuler'];
    
    $sql = "UPDATE pendaftaran SET nama = ?, kelas = ?, nomor_telepon = ?, ekstrakurikuler = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nama, $kelas, $nomor_telepon, $ekstrakurikuler, $id);
    
    if ($stmt->execute()) {
        // Redirect ke admin.php setelah berhasil update
        header("Location: admin.php");
        exit;
    } else {
        $error_message = "Terjadi kesalahan saat memperbarui data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Edit Data Pendaftaran</h2>

        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form action="edit.php?id=<?php echo $pendaftaran['id']; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $pendaftaran['id']; ?>">
            
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pendaftaran['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $pendaftaran['kelas']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $pendaftaran['nomor_telepon']; ?>" required>
            </div>
            <div class="form-group">
                <label for="ekstrakurikuler">Ekstrakurikuler:</label>
                <input type="text" class="form-control" id="ekstrakurikuler" name="ekstrakurikuler" value="<?php echo $pendaftaran['ekstrakurikuler']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-success btn-block">Update Data</button>
            <a href="admin.php" class="btn btn-secondary btn-block">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
