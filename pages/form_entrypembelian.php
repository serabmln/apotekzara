<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i> Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-align-left"></i> Form Entry Data Pembelian</li>
  </ol>
</nav>

<div class="page-content">
	<div class="row">
		<div class="col-6"><h4>Form Entry Data Pembelian</h4></div>
		<div class="col-6 text-right">
			<a href="?page=datapembelian">
				<button class="btn btn-sm btn-info">Data Pembelian</button>
			</a>
		</div>
	</div>
	<div class="form-container">
		<div class="row" style="padding: 0 16px;">
			<div class="col-md-12 vertical-form">
				<h6><i class="fas fa-list-alt"></i> Lengkapi form ini untuk menambah data pembelian</h6>
                <form method="post" id="form-pembelian" autocomplete="off">
                    <div class="row data-pembelian">
                        <div class="position-relative form-group col-md-4">
                            <label for="no_faktur" class="">Nomor Faktur <small>(nomor pada kertas faktur)</small></label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-sm" id="no_faktur" name="no_faktur">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-file-signature"></i></span>
                                </div>
                            </div>
                            <!-- <small id="" class="form-text text-muted text-right">
                              nomor pada kertas faktur
                            </small> -->
                        </div>
                        <div class="position-relative form-group col-md-4">
                            <label for="nm_supplier" class="">Nama Supplier</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="nm_supplier" name="nm_supplier">
                                <input type="hidden" class="form-control form-control-sm" id="no_supplier" name="no_supplier">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal_datasupplier" id="lihat_data_supplier"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group col-md-4">
                            <label for="tgl_pembelian" class="">Periode Pembelian</label>
                            <div class="input-group date">
                                <input type="text" class="form-control form-control-sm datepicker" id="tgl_pembelian" name="tgl_pembelian">
                                <div class="input-group-append input-group-append-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm datepicker"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row kotak-form-tabel">
                    	<div class="col-md-3 kotak-form-obat-terjual" style="display: ;">
                    		<!-- <div class="judul-form">Form data obat terjual</div> -->
                    		<!-- <form action="javascript:void(0);">  -->
                    			<div class="position-relative form-group">
                    				<label for="kode_obat" class="">Kode Obat</label>
                    				<!-- <input name="kode_obat" id="kode_obat" placeholder="" type="text" class="form-control form-control-sm"> -->
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" id="kode_obat">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal_dataobat" id="lihat_data_obat"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                    			</div>
                                <div class="position-relative form-group">
                                    <label for="nm_obat" class="">Nama Obat</label>
                                    <input name="nm_obat" id="nm_obat" placeholder="" type="text" class="form-control form-control-sm" disabled="">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="ip_no_batch" class="">No Batch</label>
                                    <input name="ip_no_batch" id="ip_no_batch" placeholder="" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="tgl_exp" class="">Tanggal Kadaluarsa</label>
                                    <input name="tgl_exp" id="tgl_exp" placeholder="" type="text" class="form-control form-control-sm datepicker_jthtempo">
                                    <!-- <small id="" class="form-text text-muted text-right">
                                      format : tttt-mm-dd
                                    </small> -->
                                </div>
                                <div class="position-relative form-group">
                                    <label for="jml_obat" class="">Jumlah</label>
                                    <div class="input-group input-group-sm">
                                      <input type="number" class="form-control" id="jml_obat" name="jml_obat" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                      <div class="input-group-append">
                                        <span class="input-group-text span_satuan" id="span_satuan">
                                            Satuan
                                        </span>
                                      </div>
                                  </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="hrg_obat" class="">
                                        Harga Beli / <span id="span_satuan_harga" class="span_satuan">Satuan</span>
                                    </label>
                                    <div class="input-group input-group-sm">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                      </div>
                                      <input type="number" class="form-control" id="hrg_obat" name="hrg_obat" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                  </div>
                                </div>
                                <!-- PPN -->
                                <div class="position-relative form-group">
                                    <label for="ip_ppn" class="">PPN</label>
                                    <select class="form-control form-control-sm" id="ip_ppn" name="ip_ppn">
                                        <option value="0">PILIH PPN</option>
                                        <option value="11">11%</option>
                                        <option value="12">12%</option>
                                    </select>
                                </div>
                                 <!-- Akkhir PPN -->
                                <!-- prosentase -->
                                <div class="position-relative form-group">
                                    <label for="ip_prosentase">
                                        Prosentase
                                    </label>
                                    <div class="input-group input-group-sm">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">%</span>
                                      </div>
                                      <input type="number" class="form-control" id="ip_prosentase" name="ip_prosentase" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <!-- akhir prosentase -->
                                 <!-- profit -->
                                <div class="position-relative form-group">
                                    <label for="ip_profit">
                                        Profit / <span id="span_satuan_harga" class="span_satuan">Satuan</span>
                                    </label>
                                    <div class="input-group input-group-sm">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                      </div>
                                      <input type="number" class="form-control" id="ip_profit" name="ip_profit" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled="">
                                    </div>
                                </div>
                                <!-- akhir profit -->
                                <!-- harga jual -->
                                <div class="position-relative form-group">
                                    <label for="ip_harga_jual">
                                        Harga Jual / <span id="span_satuan_harga" class="span_satuan">Satuan</span>
                                    </label>
                                    <div class="input-group input-group-sm">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                      </div>
                                      <input type="number" class="form-control" id="ip_harga_jual" name="ip_harga_jual" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled="">
                                    </div>
                                </div>
                                <!-- akhir harga jual -->
                                <div class="position-relative form-group">
                                    <label for="toth_obat" class="">Total Pembelian</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                        </div>
                                        <input name="toth_obat" id="toth_obat" placeholder="" type="number" class="form-control form-control-sm" disabled="">
                                    </div>
                                </div>
                                <!-- akhir ppn -->
                                <div class="position-relative form-group">
                                    <label for="toth_ppn_obat" class="">Total PPN</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                        </div>
                                        <input name="toth_ppn_obat" id="toth_ppn_obat" placeholder="" type="number" class="form-control form-control-sm" disabled="">
                                    </div>
                                </div>
                                <div class="position-relative form-group text-right mt-2 mb-2">
                                    <button type="button" class="btn btn-danger btn-sm" id="reset_obat">reset</button>
                                    <button type="button" class="btn btn-info btn-sm" id="tambah_obat">tambah</button>
                                </div>
                    		<!-- </form> -->
                    	</div>
                    	<div class="col-md-9 kotak-tabel-obat-terjual">
                            <table class="table display tabel-data">
                                <thead>
                                    <tr>
                                        <th class="text-left">Nama</th>
                                        <th class="text-left">No Batch</th>
                                        <th class="text-left">Tgl Expired</th>
                                        <th class="text-center">Harga Beli</th>
                                        <th class="text-center">Prosentase</th>
                                        <th class="text-center">Harga Jual</th>
                                        <th class="text-center">Profit</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Satuan</th>
                                        <th class="text-center">PPN (%)</th>
                                        <th class="text-center">PPN</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody id="keranjang_obat">
                                    
                                </tbody>
                                <tfoot>
                                    <tr id="baris_kosong">
                                        <td colspan="7" class="text-center">Belum ada data</td>
                                    </tr>
                                    <tr class="baris_total" style="display: none;">
                                        <td colspan="6" class="text-right" style="font-weight: bold;">Total Pembelian : <span id="total_pembelian"></span><input type="hidden" name="hidden_totalpembelian" id="hidden_totalpembelian"></td>
                                        <td class="td-opsi">
                                            <button type="button" class="btn-transition btn btn-outline-danger btn-sm" title="hapus semua obat" id="hapus_semua_obat">hapus</button>
                                        </td>
                                    </tr>
                                    <tr class="baris_total" style="display: none;">
                                        <td colspan="6" class="text-right" style="font-weight: bold;">Total PPN : <span id="total_ppn"></span><input type="hidden" name="hidden_total_ppn" id="hidden_total_ppn"></td>
                                        <td class="td-opsi">
                                            <button type="button" class="btn-transition btn btn-outline-danger btn-sm" title="hapus semua obat" id="hapus_semua_obat">hapus</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                    	</div>
                    </div>
                    <div class="row tombol-kanan">
                        <div class="col-md-7 data-pembelian row">
                            <div class="position-relative form-group col-md-3">
                                <label for="tot_bayar" class="">Total Pembelian</label>
                                <div class="text-right">
                                    Rp<span id="total_pembayaran" style="font-size: 25px; padding-right: 15px;">0,00</span>
                                </div>
                            </div>
                            <div class="position-relative form-group col-md-3">
                                <label for="tot_bayar" class="">Total PPN</label>
                                <div class="text-right">
                                    Rp<span id="total_pembayaran_ppn" style="font-size: 25px; padding-right: 15px;">0,00</span>
                                </div>
                            </div>
                            <div class="position-relative form-group col-md-3">
                                <label for="no_faktur" class="">Cara Bayar</label>
                                <select class="form-control form-control-sm" name="cr_bayar" id="cr_byr">
                                    <option value="Langsung">Langsung</option>
                                    <option value="Utang">Utang</option>
                                </select>
                            </div>
                            <div class="position-relative form-group col-md-3">
                                <label for="jth_tempo" class="">Tgl Jatuh Tempo</label>
                                <input type="text" class="form-control form-control-sm datepicker_jthtempo" id="jth_tempo" name="jth_tempo" disabled="" placeholder="masukkan tgl jatuh tempo">
                            </div>
                        </div>
                        <div class="col-md-5 text-right simpan_pembelian">
                            <input type="submit" name="simpan_pembelian" id="simpan_pembelian" class="btn btn-info" value="Simpan">
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_dataobat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tabel_dataobat" class="table table-striped display">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Obat</th>
                    <th>Harga Beli</th>
                    <th>Prosentase</th>
                    <th>Profit</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            $query_tampil = "SELECT * FROM tbl_dataobat ORDER BY nm_obat ASC";
            $sql_tampil = mysqli_query($conn, $query_tampil) or die ($conn->error);
            while($data = mysqli_fetch_array($sql_tampil)) {
         ?>
                <tr>
                    <td><?php echo $data['kd_obat']; ?></td>
                    <td><?php echo $data['nm_obat']; ?></td>
                    <td><?php echo $data['hrgbeli_obat']; ?></td>
                    <td><?php echo $data['prosentase']; ?></td>
                    <td><?php echo $data['profit']; ?></td>
                    <td><?php echo $data['hrg_obat']; ?></td>
                    <td><?php echo $data['stk_obat']; ?></td>
                    <td><?php echo $data['sat_obat']; ?></td>
                    <td><?php echo $data['ktg_obat']; ?></td>
                    <td class="td-opsi">
                        <button class="btn-transition btn btn-outline-dark btn-sm" title="pilih" id="tombol_pilihobat" name="tombol_pilihobat" data-dismiss="modal"
                            data-kode="<?php echo $data['kd_obat']; ?>"
                            data-nama="<?php echo $data['nm_obat']; ?>"
                            data-harga="<?php echo $data['hrgbeli_obat']; ?>"
                            data-prosentase="<?php echo $data['prosentase']; ?>"
                            data-profit="<?php echo $data['profit']; ?>"
                            data-harga_jual="<?php echo $data['hrg_obat']; ?>"
                            data-satuan="<?php echo $data['sat_obat']; ?>"
                        >
                            pilih
                        </button>
                    </td>
                </tr>
         <?php 
            } 
         ?>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_datasupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example" class="table table-striped display">
            <thead>
                <tr>
                    <th>Nama Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            $query_tampil_supp = "SELECT * FROM tbl_supplier ORDER BY nama_supp ASC";
            $sql_tampil_supp = mysqli_query($conn, $query_tampil_supp) or die ($conn->error);
            while($data_supp = mysqli_fetch_array($sql_tampil_supp)) {
         ?>
                <tr>
                    <td><?php echo $data_supp['nama_supp']; ?></td>
                    <td><?php echo $data_supp['alm_supp']; ?></td>
                    <td class="td-opsi">
                        <button class="btn-transition btn btn-outline-dark btn-sm" title="pilih" id="tombol_pilihsupp" name="tombol_pilihsupp" data-dismiss="modal"
                            data-no_supp="<?php echo $data_supp['no_supp']; ?>"
                            data-nama_supp="<?php echo $data_supp['nama_supp']; ?>"
                        >pilih</button>
                    </td>
                </tr>
         <?php 
            } 
         ?>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    var count = 0;
    var total_pembayaran = 0;
    var total_pembayaran_ppn = 0;

    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
        orientation: "bottom left",
        todayBtn: "linked",
        autoclose: true,
        language: "id",
        todayHighlight: true
    });

    $('.datepicker_jthtempo').datepicker({
        format: "yyyy-mm-dd",
        orientation: "auto",
        autoclose: true,
        language: "id",
        startDate: "tomorrow+1"
    });

    $("#nm_supplier").click(function() {
        $("#lihat_data_supplier").click();
    });

    $("button[name='tombol_pilihsupp']").click(function() {
        var no_supp = $(this).data("no_supp");
        var nama_supp = $(this).data("nama_supp");
        $("#nm_supplier").val(nama_supp);
        $("#no_supplier").val(no_supp);
    });

    $("#kode_obat").click(function() {
        $("#lihat_data_obat").click();
    });

    $("button[name='tombol_pilihobat']").click(function() {
        document.getElementById("jml_obat").focus();
        var kode = $(this).data("kode");
        var nama = $(this).data("nama");
        // var exp = $(this).data("expired");
        var hrg = $(this).data("harga");
        var prosentase = $(this).data("prosentase");
        var profit = $(this).data("profit");
        var harga_jual = $(this).data("harga_jual");
        var satuan = $(this).data("satuan");
        $("#kode_obat").val(kode);
        $("#nm_obat").val(nama);
        // $("#tgl_exp").val(exp);
        $("#jml_obat").val(1);
        $("#hrg_obat").val(hrg);
        $("#ip_prosentase").val(prosentase);
        $("#ip_profit").val(profit);
        $("#ip_harga_jual").val(harga_jual);
        $("#toth_obat").val(hrg);
        $(".span_satuan").text(satuan);
    });

    function reset() {
        $("#kode_obat").val("");
        $("#nm_obat").val("");
        $("#ip_no_batch").val("");
        $("#tgl_exp").val("");
        $("#hrg_obat").val("");
        $("#ip_ppn").val("0");
        $("#ip_profit").val("");
        $("#ip_prosentase").val("");
        $("#ip_harga_jual").val("");
        $("#jml_obat").val("");
        $(".span_satuan").text("satuan");
        $("#toth_obat").val("");
    }

    $("#tgl_exp").change(function() { 
        document.getElementById("jml_obat").focus();
    });

    function jml_obat() {
        var jml = Number($("#jml_obat").val());
        var harga = Number ($("#hrg_obat").val());
        // var prosentase = Number($("#ip_prosentase").val()); // Ambil nilai prosentase
        if (jml>=0) {
            var sub_total = jml*harga;
            // var tambahan = (prosentase / 100) * sub_total;
            // var total_harga = sub_total + tambahan;
            // $("#toth_obat").val(total_harga);
            $("#toth_obat").val(sub_total);
        } else {
            $("#toth_obat").val("");
        }
    }

    function hrg_obat() {
    var jml = Number($("#jml_obat").val()); // Jumlah obat
    var harga = Number($("#hrg_obat").val()); // Harga satuan obat
    var ppn = Number($("#ip_ppn").val()); // Nilai PPN dalam persen (konversi ke angka)

    // Pastikan jumlah dan harga valid
    if (jml > 0 && harga >= 0) {
        // Hitung subtotal tanpa PPN
        var sub_total = jml * harga;

        // Hitung total dengan PPN
        var total_ppn = sub_total * ppn / 100;
        var total_with_ppn = sub_total + (sub_total * ppn / 100);

        // Tampilkan total harga di input field
        $("#toth_obat").val(total_with_ppn.toFixed(2)); // Format dengan 2 desimal
        $("#toth_ppn_obat").val(total_ppn.toFixed(2)); // Format dengan 2 desimal
    } else {
        $("#toth_obat").val(""); // Kosongkan jika input tidak valid
        $("#toth_ppn_obat").val(""); // Kosongkan jika input tidak valid
    }
}

// Event listener untuk input jumlah, harga, dan PPN
$("#jml_obat, #hrg_obat, #ip_ppn").on("input change", hrg_obat);

    function prosentase() {
        var harga = Number($("#hrg_obat").val());
        var ppn_tambah = Number($("#ip_ppn").val()); // Nilai PPN dalam persen (konversi ke angka)
        var prosentase = Number($("#ip_prosentase").val()); // Ambil nilai prosentase

        if (prosentase >= 0) {
            var tambahan = (prosentase / 100) * harga; // Hitung tambahan dari prosentase
            var total_harga_jual = harga + tambahan; // Total harga sebelum PPN
            var ppn_nilai = (ppn_tambah / 100) * total_harga_jual; // Hitung nilai PPN
            var total_harga_dengan_ppn = total_harga_jual + ppn_nilai; // Tambahkan PPN ke total harga jual

            $("#ip_harga_jual").val(total_harga_dengan_ppn); // Masukkan harga jual termasuk PPN
            $("#ip_profit").val(tambahan); // Masukkan profit (tambahan)
        } else {
            $("#ip_harga_jual").val("");
            $("#ip_profit").val("");
        }
    }


    $("#jml_obat").keyup(function() { jml_obat(); });
    $("#jml_obat").change(function() { jml_obat(); });
    $("#hrg_obat").keyup(function() { hrg_obat(); });
    $("#hrg_obat").change(function() { hrg_obat(); });
    $("#ip_prosentase").keyup(function() { prosentase(); });
    $("#ip_prosentase").change(function() { prosentase(); });

    $("#reset_obat").click(function() {
        reset();
    });

    $("#tambah_obat").click(function() {
        var kode = $("#kode_obat").val();
        var nama = $("#nm_obat").val();
        var no_batch = $("#ip_no_batch").val();
        var exp = $("#tgl_exp").val();
        var jml = $("#jml_obat").val();
        var hrg = $("#hrg_obat").val();
        var ppn = $("#ip_ppn").val();
        var profit = $("#ip_profit").val();
        var hrg_jl = $("#ip_harga_jual").val();
        var prosentase = $("#ip_prosentase").val();
        var sat = $("#span_satuan_harga").text();
        var subppn = Number($("#toth_ppn_obat").val());
        var subt = Number($("#toth_obat").val());

        if(kode == ""){
            document.getElementById("lihat_data_obat").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi kode obat',
              'warning'
            )
        } if(no_batch == ""){
            document.getElementById("ip_no_batch").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi no bacth obat',
              'warning'
            )
        } else if(exp=="") {
            document.getElementById("tgl_exp").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi tanggal kadaluarsa obat',
              'warning'
            )
        } else if(jml=="" || jml<=0) {
            document.getElementById("jml_obat").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi jumlah obat dengan benar',
              'warning'
            )
        } else if(hrg=="" || hrg<=0) {
            document.getElementById("hrg_obat").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi harga obat dengan benar',
              'warning'
            )
        } else if(prosentase=="" || prosentase<=0) {
            document.getElementById("ip_prosentase").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi prosentase obat dengan benar',
              'warning'
            )
        } else if(subt=="" || subt<=0 || subt<hrg) {
            document.getElementById("toth_obat").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi total harga dengan benar',
              'warning'
            )
        } else {
            count = count + 1;
            var output = "";

            // Baris tabel
            output += '<tr id="row_' + count + '">';

            // Kolom Kode Obat (Hidden)
            output += `
            <td style="display: none;">
                <input type="hidden" name="hidden_kdobat[]" id="td_kd_obat${count}" class="td_kd_obat" value="${kode}">
            </td>`;

            // Kolom Nama Obat
            output += `
            <td>${nama}
                <input type="hidden" name="hidden_nmobat[]" id="td_nmobat${count}" class="td_nmobat" value="${nama}">
            </td>`;

            // Kolom No Batch Obat
            output += `
            <td>${no_batch}
                <input type="hidden" name="hidden_no_batch[]" id="td_no_batch${count}" class="td_no_batch" value="${no_batch}">
            </td>`;

            // Kolom Expired Date
            output += `
            <td>${exp}
                <input type="hidden" name="hidden_expobat[]" id="td_expobat${count}" class="td_expobat" value="${exp}">
            </td>`;

            // Kolom Harga Obat
            output += `
            <td class="text-center">${hrg}
                <input type="hidden" name="hidden_hrgobat[]" id="td_hrgobat${count}" class="td_hrgobat" value="${hrg}">
            </td>`;

            // Kolom Prosentase
            output += `
            <td class="text-center">${prosentase}
                <input type="hidden" name="hidden_prosentase[]" id="td_prosentase${count}" class="td_prosentase" value="${prosentase}">
            </td>`;

            // Kolom Harga Jual Obat
            output += `
            <td class="text-center">${hrg_jl}
                <input type="hidden" name="hidden_hrg_jl_obat[]" id="td_hrgjlobat${count}" class="td_hrgjlobat" value="${hrg_jl}">
            </td>`;

            // Kolom Profit Obat
            output += `
            <td class="text-center">${profit}
                <input type="hidden" name="hidden_profit[]" id="td_profit${count}" class="td_profit" value="${hrg_jl}">
            </td>`;

            // Kolom Jumlah Obat
            output += `
            <td class="text-center">${jml}
                <input type="hidden" name="hidden_jmlobat[]" id="td_jmlobat${count}" class="td_jmlobat" value="${jml}">
            </td>`;

            // Kolom Satuan
            output += `
            <td class="text-center">${sat}
                <input type="hidden" name="hidden_satobat[]" id="td_satobat${count}" class="td_satobat" value="${sat}">
            </td>`;

            // Kolom PPN Obat
            output += `
            <td class="text-center">${ppn}
                <input type="hidden" name="hidden_ppn[]" id="td_ppn${count}" class="td_ppn" value="${ppn}">
            </td>`;

            // Kolom Subtotal
            output += `
            <td class="text-right">${subppn}
                <input type="hidden" name="hidden_subtotal_ppn[]" id="td_subppn${count}" class="td_subppn" value="${subppn}">
            </td>`;

            // Kolom Subtotal
            output += `
            <td class="text-right">${subt}
                <input type="hidden" name="hidden_subtotal[]" id="td_subtotal${count}" class="td_subtotal" value="${subt}">
            </td>`;

            // Kolom Opsi Hapus
            output += `
            <td class="td-opsi">
                <button type="button" class="hapus_obat btn-transition btn btn-outline-danger btn-sm"
                name="hapus_obat" id="${count}" title="Hapus obat ini">
                Hapus
                </button>
            </td>`;

            // Akhir baris tabel
            output += '</tr>';

            // Tambahkan baris ke dalam tabel
            $("#keranjang_obat").append(output);

            // Sembunyikan baris kosong dan perbarui total pembayaran
            $("#baris_kosong").hide();
            total_pembayaran += subt;
            total_pembayaran_ppn += subppn;
            $("#total_pembelian").text(total_pembayaran);
            $("#total_ppn").text(total_pembayaran_ppn);
            $("#hidden_totalpembelian").val(total_pembayaran);
            $("#hidden_totalppn").val(total_pembayaran_ppn);
            $("#total_pembayaran").text(total_pembayaran);
            $("#total_pembayaran_ppn").text(total_pembayaran_ppn);
            $(".baris_total").show();

            // Reset form input
            reset();

        }
    });

    $(document).on("click", ".hapus_obat", function() {
        var row =  $(this).attr("id");
        var subt = Number($("#td_subtotal"+row).val());
        total_pembayaran = total_pembayaran-subt;
        $("#total_pembelian").text(total_pembayaran);
        $("#hidden_totalpembelian").val(total_pembayaran);
        $("#total_pembayaran").text(total_pembayaran);
        $("#row_"+row).remove();
        if(total_pembayaran==0)
        {
            $("#total_pembayaran").text("0,00");
            $("#baris_kosong").show();
            $(".baris_total").hide();
        }
    });

    $("#hapus_semua_obat").click(function() {
        Swal.fire({
          title: 'Hapus Semua ?',
          text: 'apakah anda yakin menghapus semua daftar obat',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya'
        }).then((hapus) => {
          if (hapus.value) {
            $("#keranjang_obat > tr").remove();
            total_pembayaran = 0;
            $("#hidden_totalpembelian").val("0");
            $("#total_pembayaran").text("0,00");
            $("#baris_kosong").show();
            $(".baris_total").hide();
          }
        })
    });

    $("#cr_byr").change(function() {
        var cr_byr = $(this).val();
        if(cr_byr == "Utang") {
            $("#jth_tempo").removeAttr("disabled");
            $("#jth_tempo").focus();
        } else {
            $("#jth_tempo").attr("disabled", true);
            $("#jth_tempo").val("");
        }
    });

    $("#simpan_pembelian").click(function () {
        event.preventDefault();
        // var str = $("#form-pembelian").serialize();
        // alert(str);
        var no_faktur = $("#no_faktur").val();
        var no_supp = $("#no_supplier").val();
        var tgl_pbl = $("#tgl_pembelian").val();
        var cr_byr = $("#cr_byr").val();
        var jth_tempo = $("#jth_tempo").val();

        if(no_faktur=="") {
            document.getElementById("no_faktur").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi nomor faktur',
              'warning'
            )
        } else if(no_supp=="") {
            document.getElementById("lihat_data_supplier").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong pilih Supplier',
              'warning'
            )
        } else if(tgl_pbl=="") {
            document.getElementById("tgl_pembelian").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi periode pembelian',
              'warning'
            )
        } else if(total_pembayaran==0) {
            document.getElementById("total_pembayaran").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong tambahkan obat terlebih dahulu',
              'warning'
            )
        } else if(cr_byr=="Utang" && jth_tempo=="") {
            document.getElementById("jth_tempo").focus();
            Swal.fire(
              'Data Belum Lengkap',
              'maaf, tolong isi tanggal jatuh tempo pembayaran',
              'warning'
            )
        } else {
            Swal.fire({
              title: 'Simpan ?',
              text: 'apakah anda telah mengisi data pembelian dengan benar ',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya'
            }).then((simpan) => {
              if (simpan.value) {
                var count_data = 0;
                $(".td_kd_obat").each(function(){
                    count_data = count_data + 1;
                });
                if(count_data > 0) {
                    var form_data = $("#form-pembelian").serialize();
                    $.ajax({
                        url: "ajax/simpan_pembelian.php",
                        method: "POST",
                        data: form_data,
                        success:function(data) {
                            Swal.fire({
                              title: 'Berhasil',
                              text: 'Data Berhasil Disimpan',
                              type: 'success',
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'OK'
                            })
                            .then((ok) => {
                              if (ok.value) {
                                // window.location='?page=entry_datapembelian';
                                location.reload();
                              }
                            })
                        }
                    })
                } else {
                    alert();
                }
              }
            })
        }
    })
});
</script>