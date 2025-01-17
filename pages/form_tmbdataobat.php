<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="?page=dataobat"><i class="fas fa-capsules"></i> Data Obat</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-align-left"></i> Form Tambah Data Obat</li>
  </ol>
</nav>

<div class="page-content">
  <div class="row">
    <div class="col-6"><h4>Form Tambah Data Obat</h4></div>
    <div class="col-6 text-right">
      <a href="?page=dataobat">
        <button class="btn btn-sm btn-info">Daftar Data Obat</button>
      </a>
    </div>
  </div>

  <div class="form-container">
    <div class="row">
      <div class="col-md-6 offset-md-3 offset-form">
        <h6><i class="fas fa-list-alt"></i> Lengkapi form ini untuk menambah data obat baru</h6>
        <form id="form-tambah-obat" action="javascript:void(0)" autocomplete="off">
          <!-- Kategori -->
          <div class="form-group row">
            <label for="ip_ktgobat" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-9">
              <select name="ip_ktgobat" id="ip_ktgobat" class="form-control">
                <option value="0">PILIH KATEGORI OBAT</option>
                <option value="GENERIK">GENERIK</option>
                <option value="ALKES">ALKES</option>
                <option value="OTC">OTC</option>
                <option value="ETHICAL">ETHICAL</option>
                <option value="KOSMETIK">KOSMETIK</option>
                <option value="HERBAL">HERBAL</option>
                <option value="RACIKAN">RACIKAN</option>
              </select>
            </div>
          </div>

          <!-- Kode Obat -->
          <div class="form-group row pt-3">
            <label for="ip_kdobat" class="col-sm-3 col-form-label">Kode Obat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ip_kdobat" placeholder="masukkan kode obat" disabled="">
              <button type="button" id="generateCode" class="mt-3 btn btn-primary btn-sm">Generate Kode</button>
            </div>
          </div>

          <!-- Nama Obat -->
          <div class="form-group row">
            <label for="ip_nmobat" class="col-sm-3 col-form-label">Nama Obat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ip_nmobat" placeholder="masukkan nama obat">
            </div>
          </div>

          <!-- Satuan Jual -->
          <div class="form-group row">
            <label for="ip_stobat" class="col-sm-3 col-form-label">Satuan Jual</label>
            <div class="col-sm-9">
              <select name="ip_stobat" id="ip_stobat" class="form-control form-control-sm">
                <option value="0">PILIH SATUAN OBAT</option>
                <option value="BOX">Box</option>
                <option value="TUBE">Tube</option>
                <option value="PCS">Pcs</option>
                <option value="FLS">Flask</option>
                <option value="BOTOL">Botol</option>
                <option value="TABLET">Tablet</option>
                <option value="STRIP">Strip</option>
                <option value="SACHET">Sachet</option>
                <option value="BATANG">Batang</option>
              </select>
            </div>
          </div>

          <!-- Harga per Satuan -->
          <div class="form-group row">
            <label for="ip_hrgobat" class="col-sm-3 col-form-label">Harga Jual Per <span class="u_satuan" id="u_satuan">Satuan</span></label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                </div>
                <input type="number" class="form-control" id="ip_hrgobat" name="ip_hrgobat" placeholder="masukkan harga obat">
              </div>
            </div>
          </div>

          <!-- Prosentase -->
          <div class="form-group row">
            <label for="ip_prosentase" class="col-sm-3 col-form-label">Prosentase</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="number" class="form-control" id="ip_prosentase" name="ip_prosentase" placeholder="masukan prosentase obat">
              </div>
            </div>
          </div>

          <!-- Stok Minimal -->
          <div class="form-group row">
            <label for="ip_minstok" class="col-sm-3 col-form-label">Stok Minimal</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="number" class="form-control form-control-sm" id="ip_minstok" name="ip_minstok" placeholder="masukkan jumlah minimal stok obat">
                <div class="input-group-append">
                  <span class="input-group-text u_satuan" id="inputGroup-sizing-sm">Satuan</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Kadaluarsa -->
          <div class="form-group row">
            <label for="ip_expobat" class="col-sm-3 col-form-label">Kadaluarsa</label>
            <div class="col-sm-9">
              <input type="date" class="form-control form-control-sm" id="ip_expobat" placeholder="masukkan tanggal kadaluarsa">
            </div>
          </div>

          <!-- Stok -->
          <div class="form-group row">
            <label for="ip_stokobat" class="col-sm-3 col-form-label">Stok</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="number" class="form-control form-control-sm" id="ip_stokobat" name="ip_stokobat" placeholder="masukkan jumlah stok obat">
                <div class="input-group-append">
                  <span class="input-group-text u_satuan" id="inputGroup-sizing-sm">Satuan</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Catatan Racikan (Muncul jika kategori adalah Racikan) -->
          <div class="form-group row" id="catatanRacikan" style="display: none;">
            <label for="ip_catatan" class="col-sm-3 col-form-label">Catatan Racikan</label>
            <div class="col-sm-9">
              <textarea class="form-control form-control-sm" id="ip_catatan" name="ip_catatan" placeholder="Masukkan catatan untuk obat racikan"></textarea>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group row">
            <div class="col-sm-12 text-right">
              <button class="btn btn-info btn-sm" id="simpan_obat" name="simpan_obat">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    // Generate kode obat
    $("#generateCode").click(function () {
      const kategori = $("#ip_ktgobat").val();

      if (!kategori) {
        Swal.fire("Kategori Tidak Dipilih", "Pilih kategori obat terlebih dahulu", "warning");
        return;
      }

      $.ajax({
        type: "POST",
        url: "ajax/generate_kode.php",
        data: { kategori: kategori },
        dataType: "json",
        beforeSend: function () {
          $("#generateCode").prop("disabled", true);
        },
        success: function (response) {
          if (response.success) {
            $("#ip_kdobat").val(response.kode);
          } else {
            Swal.fire("Gagal Generate", response.message || "Tidak bisa generate kode obat", "error");
          }
        },
        error: function (xhr) {
          Swal.fire("Error", `Terjadi kesalahan: ${xhr.statusText}`, "error");
        },
        complete: function () {
          $("#generateCode").prop("disabled", false);
        },
      });
    });

    // Update satuan label based on selection
    $("#ip_stobat").change(function() {
      var satuan = $("#ip_stobat").val();
      if (satuan == "0") {
        satuan = "Satuan";
      }
      $(".u_satuan").text(satuan);
    });

    // Show/hide catatan textarea based on kategori obat
    $("#ip_ktgobat").change(function() {
      var kategori = $(this).val();

      // Show catatan textarea only if kategori is "RACIKAN"
      if (kategori === "RACIKAN") {
        $("#catatanRacikan").show();
      } else {
        $("#catatanRacikan").hide();
      }
    });

    // Save obat data
    $("#simpan_obat").click(function () {
      var kode = $("#ip_kdobat").val();
      var nama = $("#ip_nmobat").val();
      var exp = $("#ip_expobat").val();
      var ktg = $("#ip_ktgobat").val();
      var satuan = $("#ip_stobat").val();
      var harga = $("#ip_hrgobat").val();
      var prosentase = $("#ip_prosentase").val();
      var stok = $("#ip_stokobat").val();
      var min_stok = $("#ip_minstok").val();
      var catatan = $("#ip_catatan").val(); // Ambil nilai catatan jika ada

      // Validation checks
      if (kode == "") {
        document.getElementById("ip_kdobat").focus();
        return Swal.fire("Gagal", "Kode Obat Tidak Boleh Kosong", "warning");
      }
      if (nama == "") {
        document.getElementById("ip_nmobat").focus();
        return Swal.fire("Gagal", "Nama Obat Tidak Boleh Kosong", "warning");
      }

      if (min_stok == "") {
        document.getElementById("ip_minstok").focus();
        return Swal.fire("Gagal", "Stok Minimal Tidak Boleh Kosong", "warning");
      }
      
      // Kirim data catatan jika kategori adalah "Racikan"
      if (ktg === "RACIKAN" && catatan === "") {
        document.getElementById("ip_catatan").focus();
        return Swal.fire("Gagal", "Catatan Racikan Tidak Boleh Kosong", "warning");
      }

      $.ajax({
        type: "POST",
        url: "ajax/simpan_obat.php",
        data: {
          kode: kode,
          nama: nama,
          exp: exp,
          kategori: ktg,
          satuan: satuan,
          harga: harga,
          prosentase: prosentase,
          stok: stok,
          min_stok: min_stok,
          catatan: catatan,
        },
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
        }
      });
    });
  });
</script>
