<?php 
include '../koneksi.php';
$no_pjl = @$_GET['no_pjl'];
?>

<link type="text/css" href="./isi/style_css/nota_penjualan.css" rel="stylesheet">

<page backleft="0px" backright="0px" backtop="0px" backbottom="0px" style="font-size: 5px;">
    <page_header></page_header>
    <page_footer></page_footer>

    <div class="page-content">
        <div class="header-section">
            <table class="header-table">
                <tr>
                    <td class="apotek-info">
                        <span class="apotek-name">Apotek Zara</span><br>
                        <span class="apotek-address">Pangkah</span><br>
                        <span class="apotek-phone"><!-- (Telp) 0822-2775-5005 --></span>
                    </td>
                    <td class="nota-info">
                        <span class="nota-title">NOTA PENJUALAN</span><br>
                        <span class="nota-number">No: <?php echo $no_pjl; ?></span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="sales-info">
            <table class="sales-table">
                <?php 
                $query_pjl = "SELECT tbl_penjualan.tgl_penjualan, tbl_penjualan.total_penjualan, tbl_penjualan.tunai, tbl_penjualan.kembali, tbl_pegawai.username 
                FROM tbl_penjualan 
                INNER JOIN tbl_pegawai ON tbl_penjualan.id_peg = tbl_pegawai.id_peg 
                WHERE tbl_penjualan.no_penjualan = '$no_pjl'";
                $sql_pjl = mysqli_query($conn, $query_pjl) or die ($conn->error);
                $data_pjl = mysqli_fetch_array($sql_pjl);
                ?>
                <tr>
                    <td class="sales-date">Tanggal: <?php echo tgl_indo($data_pjl['tgl_penjualan']); ?></td>
                    <td class="sales-cashier">Kasir: <?php echo $data_pjl['username']; ?></td>
                </tr>
            </table>
        </div>

        <div class="items-section">
            <table class="items-table">
                <thead>
                    <tr>
                        <th>Nama Obat</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $query_dpjl = "SELECT tbl_dataobat.nm_obat, tbl_penjualandetail.jml_jual, tbl_penjualandetail.sat_jual, tbl_penjualandetail.hrg_jual, tbl_penjualandetail.subtotal 
                FROM tbl_penjualandetail 
                INNER JOIN tbl_dataobat ON tbl_penjualandetail.kd_obat = tbl_dataobat.kd_obat 
                WHERE tbl_penjualandetail.no_penjualan = '$no_pjl'";
                $sql_dpjl = mysqli_query($conn, $query_dpjl) or die ($conn->error);
                while ($data_dpjl = mysqli_fetch_array($sql_dpjl)) {
                ?>
                <tr>
                    <td class="item-name"> <?php echo $data_dpjl['nm_obat']; ?> </td>
                    <td class="item-quantity"> <?php echo $data_dpjl['jml_jual']; ?> </td>
                    <td class="item-unit"> <?php echo $data_dpjl['sat_jual']; ?> </td>
                    <td class="item-price" align="right"> <?php echo number_format($data_dpjl['hrg_jual'], 0, ',', '.'); ?> </td>
                    <td class="item-subtotal" align="right"> <?php echo number_format($data_dpjl['subtotal'], 0, ',', '.'); ?> </td>
                </tr>
                <?php } ?>
                <tr class="totals-row">
                    <td colspan="4">Total:</td>
                    <td class="total-value" align="right"> <?php echo number_format($data_pjl['total_penjualan'], 0, ',', '.'); ?> </td>
                </tr>
                <tr class="cash-row">
                    <td colspan="4">Tunai:</td>
                    <td class="cash-value" align="right"> <?php echo number_format($data_pjl['tunai'], 0, ',', '.'); ?> </td>
                </tr>
                <tr class="change-row">
                    <td colspan="4">Kembali:</td>
                    <td class="change-value" align="right"> <?php echo number_format($data_pjl['kembali'], 0, ',', '.'); ?> </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="footer-section">
            <p class="thank-you">== TERIMA KASIH ===</p>
        </div>
    </div>
</page>
