<?php
require_once '../koneksi.php';

$response = ['success' => false, 'message' => 'Terjadi kesalahan'];

// Cek apakah data dikirimkan dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari POST request
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $prosentase = $_POST['prosentase'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $exp = $_POST['exp'];
    $catatan = isset($_POST['catatan']) ? $_POST['catatan'] : ''; // Ambil data catatan, jika ada

    // Cek apakah semua input sudah ada
    if (empty($kode) || empty($nama) || empty($min_stok)) {
        $response['message'] = "Semua kolom harus diisi!";
        echo json_encode($response);
        exit;
    }

    // Query untuk menyimpan data obat ke tbl_dataobat
    $stmt = $conn->prepare("INSERT INTO tbl_dataobat (kd_obat, nm_obat, ktg_obat, sat_obat, hrg_obat, prosentase, stk_obat, minstk_obat, exp_obat, racikan_obat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Cek jika prepare gagal
    if ($stmt === false) {
        $response['message'] = "Prepare statement gagal: " . $conn->error;
        echo json_encode($response);
        exit;
    }

    // Bind parameters untuk tbl_dataobat
    $stmt->bind_param("ssssdiisss", $kode, $nama, $kategori, $satuan, $harga, $prosentase, $stok, $min_stok, $exp, $catatan);

    // Eksekusi statement untuk tbl_dataobat
    if ($stmt->execute()) {
        // Setelah data obat berhasil disimpan, simpan data ke tabel tbl_stokexpobat
        $stmt_stok = $conn->prepare("INSERT INTO tbl_stokexpobat (kd_obat, tgl_exp, stok) VALUES (?, ?, ?)");

        // Cek jika prepare statement untuk stok gagal
        if ($stmt_stok === false) {
            $response['message'] = "Prepare statement gagal untuk stok: " . $conn->error;
            echo json_encode($response);
            exit;
        }

        // Bind parameters untuk tbl_stokexpobat
        $stmt_stok->bind_param("ssi", $kode, $exp, $stok);

        // Eksekusi statement untuk tbl_stokexpobat
        if ($stmt_stok->execute()) {
            // Jika kedua query berhasil
            $response['success'] = true;
            $response['message'] = "Data obat dan stok berhasil disimpan!";
        } else {
            // Jika gagal menyimpan stok
            $response['message'] = "Gagal menyimpan data stok: " . $stmt_stok->error;
        }

        // Tutup statement untuk tbl_stokexpobat
        $stmt_stok->close();
    } else {
        // Jika gagal menyimpan data obat
        $response['message'] = "Gagal menyimpan data obat: " . $stmt->error;
    }

    // Tutup statement untuk tbl_dataobat dan koneksi
    $stmt->close();
    $conn->close();
}

// Kirim respon JSON
echo json_encode($response);
?>
