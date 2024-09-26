<?php
include '../login/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data
    $sql = "DELETE FROM pendaftaran WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect setelah berhasil dihapus
        header("Location: admin.php?message=deleted");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    // Jika tidak ada ID yang dikirim, kembali ke halaman utama
    header("Location: index.php");
}
?>
