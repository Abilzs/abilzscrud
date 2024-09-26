<?php
require('../fpdf/fpdf.php'); // Pastikan kamu telah mengunduh dan menyertakan library FPDF

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomor_telepon = $_POST['Nomor_Telepon'];
    $ekstrakurikuler = $_POST['ekstrakurikuler'];

     // Mendapatkan tanggal saat ini
     $tanggal = date('d-m-Y'); // Format tanggal, misalnya '12-09-2024'

     // Mengonversi angka bulan ke nama bulan dalam bahasa Indonesia
     $bulanIndo = array(
         '01' => 'Januari', '02' => 'Februari', '03' => 'Maret',
         '04' => 'April', '05' => 'Mei', '06' => 'Juni',
         '07' => 'Juli', '08' => 'Agustus', '09' => 'September',
         '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
     );

     list($hari, $bulan, $tahun) = explode('-', $tanggal);
     $bulan = $bulanIndo[$bulan];
     $tanggalIndo = "$hari $bulan $tahun"; // Format tanggal, misalnya '12 September 2024'
    
    // Membuat objek PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Ukuran gambar (misalnya 50x50)
    $imgWidth = 50;
    $imgHeight = 50;

    // Menghitung posisi gambar di tengah
    $x = ($pdf->GetPageWidth() - $imgWidth) / 2;  // Posisi X untuk di tengah secara horizontal
    $y = ($pdf->GetPageHeight() - $imgHeight) / 2; // Posisi Y untuk di tengah secara vertikal

    // Menambahkan gambar di tengah
    $pdf->Image('../gambar/skm.png', 80, 10, 50, 50);


    // Menambahkan teks di bawah gambar
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Ln(70); // Beri jarak dari gambar
    $pdf->Cell(0, 10, 'Pendaftaran Ekstrakurikuler - SMKN 3 Yogyakarta', 0, 1, 'C');

    // Detail Pendaftaran
    $pdf->SetFont('Arial', '', 12);
    $pdf->Ln(10); // Line break untuk memberi ruang antara elemen
    $pdf->Cell(0, 10, 'Tanggal: ' . $tanggalIndo, 0, 1, 'L'); // Menambahkan tanggal dengan nama bulan
    $pdf->Ln(0.5); // Line break untuk memberi ruang antara elemen
    $pdf->Cell(0, 10, 'Nama: ' . $nama, 0, 1, 'L');
    $pdf->Ln(0.5); // Line break untuk memberi ruang antara elemen
    $pdf->Cell(0, 10, 'Kelas: ' . $kelas, 0, 1, 'L');
    $pdf->Ln(0.5); // Line break untuk memberi ruang antara elemen
    $pdf->Cell(0, 10, 'Nomor WhatsApp: ' . $nomor_telepon, 0, 1, 'L');
    $pdf->Ln(0.5); // Line break untuk memberi ruang antara elemen
    $pdf->Cell(0, 10, 'Ekstrakurikuler: ' . $ekstrakurikuler, 0, 1, 'L');
    $pdf->Ln(15); // Line break untuk memberi ruang antara elemen
    $pdf->MultiCell(0, 10, 'Demikian Formulir ini saya isi dengan sungguh-sungguh dan penuh tanggung jawab tanpa tekanan dari pihak manapun.', 0, 'L');
    $pdf->Ln(40); // Line break sebelum teks terakhir
    $pdf->Cell(0, 10, 'Yogyakarta, ' . $tanggalIndo, 0, 1, 'R'); // Menambahkan teks terakhir dengan tanggal
    $pdf->Ln(23); // Line break sebelum teks terakhir
    $pdf->Cell(0, 10, $nama, 0, 1, 'R');
    

    // Output PDF

    // Output PDF
    $pdf->Output('I', 'Pendaftaran_Ekstrakurikuler_' . $nama . '.pdf');

}
?>
