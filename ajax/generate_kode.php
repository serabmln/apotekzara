<?php
session_start();
include "../koneksi.php";

// Pastikan koneksi ke database berhasil
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed"]);
    exit;
}

// Ambil kategori dari POST
$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : null;

// Pastikan kategori valid
if (!$kategori) {
    echo json_encode(["success" => false, "message" => "Kategori tidak valid"]);
    exit;
}

// Tentukan prefix berdasarkan kategori
$prefixMap = [
    "GENERIK" => "GEN-",
    "ALKES" => "ALK-",
    "OTC" => "OTC-",
    "ETHICAL" => "ETH-",
    "KOSMETIK" => "KOS-",
    "HERBAL" => "HER-",
    "RACIKAN" => "RCK-"
];

// Jika kategori tidak ada di map, beri pesan error
if (!array_key_exists($kategori, $prefixMap)) {
    echo json_encode(["success" => false, "message" => "Kategori tidak dikenal"]);
    exit;
}

// Ambil prefix kategori
$prefix = $prefixMap[$kategori];

// Ambil nomor urut terakhir dari database berdasarkan kategori
$sql = "SELECT last_number FROM kode_obat_sequence WHERE kategori = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $kategori);
$stmt->execute();
$result = $stmt->get_result();

// Jika kategori sudah ada, update nomor urut dan generate kode baru
if ($row = $result->fetch_assoc()) {
    $lastNumber = (int) $row['last_number'];
    $newNumber = $lastNumber + 1;

    // Update nomor urut di database
    $updateSql = "UPDATE kode_obat_sequence SET last_number = ? WHERE kategori = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("is", $newNumber, $kategori);
    if ($updateStmt->execute()) {
        // Generate kode baru dengan format prefix + nomor urut
        $kodeBaru = $prefix . str_pad($newNumber, 5, "0", STR_PAD_LEFT);
        echo json_encode(["success" => true, "kode" => $kodeBaru]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal mengupdate nomor urut"]);
    }
} else {
    // Jika kategori belum ada, tambahkan kategori baru dengan nomor urut mulai dari 1
    $insertSql = "INSERT INTO kode_obat_sequence (kategori, last_number) VALUES (?, 1)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("s", $kategori);
    if ($insertStmt->execute()) {
        // Generate kode baru dengan nomor urut 0001
        $kodeBaru = $prefix . "0001";
        echo json_encode(["success" => true, "kode" => $kodeBaru]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal menambahkan kategori baru"]);
    }
}

// Tutup koneksi database
$conn->close();
?>
