<?php 
    session_start();
    include "../koneksi.php";

    // Ambil data dari form
    $kode = $_POST['ip_kdobat'];
    $nama = strtoupper($_POST['ip_nmobat']);
    $satuan = $_POST['ip_stobat'];
    $harga_beli = $_POST['ip_hrgbeliobat'];
    $catatan = $_POST['ip_catatan'];
    $prosentase = $_POST['ip_prosentase'];
    $profit = $_POST['ip_profit'];
    $harga_jual = $_POST['ip_hrgjualobat'];
    $min_stok = $_POST['ip_minstok'];

    $a_nmrstok = $_POST['ip_nmrstok'];
    $a_exp = $_POST['ip_kadaluarsa'];
    $a_stok = $_POST['ip_stok'];
    $jml_a = count($a_nmrstok);

    $stok_total = 0;

    // Update tabel stok expirasi
    for ($i = 0; $i < $jml_a; $i++) {
        $nmr_stok = $a_nmrstok[$i];
        $exp_date = $a_exp[$i];
        $stok_per_item = $a_stok[$i];
        $stok_total += $stok_per_item;

        $query_stok = "UPDATE tbl_stokexpobat SET tgl_exp = '$exp_date', stok = '$stok_per_item' WHERE no_stok = '$nmr_stok'";
        $sql_stok = mysqli_query($conn, $query_stok);

        if (!$sql_stok) {
            die("Error updating stok: " . mysqli_error($conn));
        }
    }

    // Update tabel data obat
    $query = "UPDATE tbl_dataobat 
              SET nm_obat = '$nama', 
                  sat_obat = '$satuan', 
                  hrg_obat = '$harga_jual', 
                  hrgbeli_obat = '$harga_beli', 
                  prosentase = '$prosentase', 
                  stk_obat = '$stok_total', 
                  minstk_obat = '$min_stok',
                  racikan_obat = '$catatan',
                  profit = '$profit'
              WHERE kd_obat = '$kode'";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo json_encode(["success" => true, "message" => "Data obat berhasil diperbarui"]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal memperbarui data obat: " . mysqli_error($conn)]);
    }
?>
