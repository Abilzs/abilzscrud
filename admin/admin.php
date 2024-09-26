<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Pendaftaran</h2>
        
        <!-- Tombol untuk menambah data pengguna -->
        <div class="mb-4 text-right">
            <a href="crud_users.php" class="btn btn-primary">Data Pengguna</a>
        </div>

        <?php
        include '../login/config.php';

        $sql = "SELECT * FROM pendaftaran";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-bordered'>";
            echo "<thead class='thead-dark'><tr><th>ID</th><th>Nama</th><th>Kelas</th><th>Nomor Telepon</th><th>Ekstrakurikuler</th><th>Aksi</th></tr></thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["nama"]. "</td>
                        <td>" . $row["kelas"]. "</td>
                        <td>" . $row["nomor_telepon"]. "</td>
                        <td>" . $row["ekstrakurikuler"]. "</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='hapus.php?id=".$row['id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
                        </td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning text-center'>Tidak ada data ditemukan</div>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
