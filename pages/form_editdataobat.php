<?php 
  $kd_obat = isset($_GET['kode']) ? $_GET['kode'] : '';
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="?page=dataobat"><i class="fas fa-capsules"></i> Data Obat</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-edit"></i> Form Edit Data Obat</li>
  </ol>
</nav>

<div class="page-content">
  <div class="row">
    <div class="col-6">
      <h4>Form Ubah Data Obat</h4>
    </div>
    <div class="col-6 text-right">
      <a href="?page=dataobat">
        <button class="btn btn-sm btn-info">Daftar Data Obat</button>
      </a>
    </div>
  </div>
  <div class="form-container">
    <div class="row">
      <div class="col-md-6 offset-md-3 offset-form">
        <h6><i class="fas fa-list-alt"></i> Lengkapi form ini untuk merubah data obat</h6>

        <?php 
          $query_tampil = "SELECT * FROM tbl_dataobat WHERE kd_obat='$kd_obat'";
          $sql_tampil = mysqli_query($conn, $query_tampil) or die(mysqli_error($conn));
          $data = mysqli_fetch_array($sql_tampil);
        ?>

        <form id="form_editobat" method="POST" autocomplete="off">
          <!-- Kategori Obat -->
          <div class="form-group row">
            <label for="ip_ktgobat" class="col-sm-3 col-form-label">Kategori Obat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" name="ip_ktgobat" id="ip_ktgobat" value="<?php echo htmlspecialchars($data['ktg_obat']); ?>" readonly style="text-transform: uppercase;">
            </div>
          </div>

          <!-- Kode Obat -->
          <div class="form-group row pt-3">
            <label for="ip_kdobat" class="col-sm-3 col-form-label">Kode Obat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ip_kdobat" name="ip_kdobat" value="<?php echo htmlspecialchars($kd_obat); ?>" readonly>
            </div>
          </div>

          <!-- Nama Obat -->
          <div class="form-group row">
            <label for="ip_nmobat" class="col-sm-3 col-form-label">Nama Obat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" name="ip_nmobat" id="ip_nmobat" value="<?php echo htmlspecialchars($data['nm_obat']); ?>" style="text-transform: uppercase;">
            </div>
          </div>

          <!-- Satuan Jual -->
          <div class="form-group row">
            <label for="ip_stobat" class="col-sm-3 col-form-label">Satuan Jual</label>
            <div class="col-sm-9">
              <select name="ip_stobat" id="ip_stobat" class="form-control form-control-sm">
                <option value="0">PILIH SATUAN OBAT</option>
                <?php
                  $satuan = ["BOX", "TUBE", "PCS", "FLS", "BOTOL", "TABLET", "STRIP", "SACHET", "BATANG"];
                  foreach ($satuan as $sat) {
                    $selected = ($data['sat_obat'] == $sat) ? "selected" : "";
                    echo "<option value='$sat' $selected>$sat</option>";
                  }
                ?>
              </select>
            </div>
          </div>

          <!-- Harga Beli -->
          <div class="form-group row">
            <label for="ip_hrgbeliobat" class="col-sm-3 col-form-label">Harga Beli Per <span id="u_satuan"><?php echo htmlspecialchars($data['sat_obat']); ?></span></label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="ip_hrgbeliobat" name="ip_hrgbeliobat" value="<?php echo htmlspecialchars($data['hrgbeli_obat']); ?>" readonly>
              </div>
            </div>
          </div>

          <!-- Prosentase -->
          <div class="form-group row">
            <label for="ip_prosentase" class="col-sm-3 col-form-label">Prosentase</label>
            <div class="col-sm-9">
              <input type="number" class="form-control form-control-sm" id="ip_prosentase" name="ip_prosentase" value="<?php echo htmlspecialchars($data['prosentase']); ?>">
            </div>
          </div>

          <!-- Profit -->
          <div class="form-group row">
            <label for="ip_profit" class="col-sm-3 col-form-label">Profit Per <span id="u_satuan"><?php echo htmlspecialchars($data['sat_obat']); ?></span></label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="ip_profit" name="ip_profit" value="<?php echo htmlspecialchars($data['profit']); ?>" readonly>
              </div>
            </div>
          </div>

          <!-- Harga Jual -->
          <div class="form-group row">
            <label for="ip_hrgjualobat" class="col-sm-3 col-form-label">Harga Jual Per <span id="u_satuan"><?php echo htmlspecialchars($data['sat_obat']); ?></span></label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="ip_hrgjualobat" name="ip_hrgjualobat" value="<?php echo htmlspecialchars($data['hrg_obat']); ?>">
              </div>
            </div>
          </div>

          <!-- Stok Minimal -->
          <div class="form-group row">
            <label for="ip_minstok" class="col-sm-3 col-form-label">Stok Minimal</label>
            <div class="col-sm-9">
              <input type="number" class="form-control form-control-sm" id="ip_minstok" name="ip_minstok" value="<?php echo htmlspecialchars($data['minstk_obat']); ?>" readonly>
            </div>
          </div>

          <!-- Catatan Racikan -->
          <div class="form-group row" id="catatanRacikan" style="<?php echo ($data['ktg_obat'] == 'RACIKAN') ? '' : 'display: none;'; ?>">
            <label for="ip_catatan" class="col-sm-3 col-form-label">Catatan Racikan</label>
            <div class="col-sm-9">
              <textarea class="form-control form-control-sm" id="ip_catatan" name="ip_catatan"><?php echo htmlspecialchars($data['racikan_obat']); ?></textarea>
            </div>
          </div>

          <!-- Data Stok Exp -->
          <?php 
            $query_stok = "SELECT * FROM tbl_stokexpobat WHERE kd_obat = '$kd_obat'";
            $sql_stok = mysqli_query($conn, $query_stok) or die(mysqli_error($conn));
            $no = 1;
            while ($data_stok = mysqli_fetch_array($sql_stok)) {
          ?>
          <div class="form-group row">
            <label for="ip_kadaluarsa<?php echo $no; ?>" class="col-sm-3 col-form-label">Kadaluarsa</label>
            <div class="col-sm-4">
              <input type="date" class="form-control form-control-sm" id="ip_kadaluarsa<?php echo $no; ?>" name="ip_kadaluarsa[]" value="<?php echo htmlspecialchars($data_stok['tgl_exp']); ?>">
              <input type="hidden" id="ip_nmrstok<?php echo $no; ?>" name="ip_nmrstok[]" value="<?php echo htmlspecialchars($data_stok['no_stok']); ?>">
            </div>
            <label for="ip_stok<?php echo $no; ?>" class="col-sm-1 col-form-label text-right">Stok</label>
            <div class="col-sm-4">
              <input type="number" class="form-control form-control-sm" id="ip_stok<?php echo $no; ?>" name="ip_stok[]" value="<?php echo htmlspecialchars($data_stok['stok']); ?>">
            </div>
          </div>
          <?php $no++; } ?>

          <!-- Simpan Button -->
          <div class="form-group row">
            <div class="col-sm-12 text-right">
              <button type="submit" class="btn btn-info btn-sm" id="simpan_obat" name="simpan_obat">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
    // Tampilkan atau sembunyikan catatan racikan berdasarkan kategori obat
    const kategori = $("#ip_ktgobat").val();
    $("#catatanRacikan").toggle(kategori === "RACIKAN");

    $("#ip_ktgobat").change(function () {
        $("#catatanRacikan").toggle($(this).val() === "RACIKAN");
    });

    // Ubah label satuan berdasarkan pilihan satuan jual
    $("#ip_stobat").change(function () {
        const satuan = $(this).val();
        $("#u_satuan").text(satuan === "0" ? "Satuan" : satuan);
    });

    // Fungsi untuk menghitung harga jual berdasarkan prosentase
    function updateHargaJual() {
        const hargaBeli = Number($("#ip_hrgbeliobat").val());
        const prosentase = Number($("#ip_prosentase").val());

        if (prosentase >= 0) {
            const tambahan = (prosentase / 100) * hargaBeli;
            const hargaJual = hargaBeli + tambahan;
            $("#ip_hrgjualobat").val(hargaJual.toFixed(2)); // Format dua desimal
        } else {
            $("#ip_hrgjualobat").val("");
        }
    }

    // Fungsi untuk menghitung profit berdasarkan prosentase
      function updateProfit() {
          const hargaBeli = Number($("#ip_hrgbeliobat").val());
          const prosentase = Number($("#ip_prosentase").val());

          if (prosentase >= 0) {
              const profit = (prosentase / 100) * hargaBeli;
              $("#ip_profit").val(profit.toFixed(2)); // Format dua desimal
          } else {
              $("#ip_profit").val(""); // Kosongkan jika prosentase tidak valid
          }
      }

    // Event untuk meng-update harga jual saat prosentase berubah
    $("#ip_prosentase").on("keyup change", function () {
        updateHargaJual();
    });
    
    // Event untuk meng-update profit saat harga beli atau prosentase berubah
    $("#ip_hrgbeliobat, #ip_prosentase").on("keyup change", function () {
        updateProfit();
    });

    // Validasi dan submit form
    $("#form_editobat").on("submit", function (e) {
        e.preventDefault();

        // Validasi input form
        const namaObat = $("#ip_nmobat").val().trim();
        const satuan = $("#ip_stobat").val();
        const hargaJual = $("#ip_hrgjualobat").val().trim();
        const expDate = $("input[name='ip_kadaluarsa[]']").val().trim();
        const stok = $("input[name='ip_stok[]']").val().trim();

        if (!namaObat) {
            Swal.fire("Gagal", "Nama obat harus diisi!", "error");
            return;
        }
        if (satuan == "0") {
            Swal.fire("Gagal", "Pilih satuan obat!", "error");
            return;
        }
        // if (!hargaJual || hargaJual <= 0) {
        //     Swal.fire("Gagal", "Harga jual harus diisi!", "error");
        //     return;
        // }
        // if (!expDate) {
        //     Swal.fire("Gagal", "Tanggal kadaluarsa harus diisi!", "error");
        //     return;
        // }
        // if (!stok || stok <= 0) {
        //     Swal.fire("Gagal", "Stok harus diisi dengan nilai yang valid!", "error");
        //     return;
        // }

        // Kirim form jika validasi berhasil
        const formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "ajax/edit_dataobat.php",
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    Swal.fire("Sukses", response.message || "Data obat berhasil disimpan", "success");
                    setTimeout(function () {
                        window.location.href = "?page=dataobat";
                    }, 1000);
                } else {
                    Swal.fire("Gagal", response.message || "Data obat gagal disimpan", "error");
                }
            },
            error: function () {
                Swal.fire("Error", "Terjadi kesalahan saat menyimpan data obat", "error");
            },
        });
    });
});
</script>