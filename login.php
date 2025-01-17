<?php 
session_start();
if (@$_SESSION['posisi_peg']) {
    echo "<script>window.location='./';</script>";
} else {
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/bootstrap_4/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/private_style/style.css">
    <link rel="stylesheet" href="asset/sweetalert/dist/sweetalert2.min.css">

    <title>Aplikasi Forecasting Apotek Zara | Login</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="text-center mb-4">
            <img src="asset/gambar/zara.png" class="rounded-circle shadow" alt="Logo Apotek Zara" style="width: 120px; height: 120px;">
            <h1 class="mt-3 text-primary fw-bold">Apotek Zara</h1>
            <p class="text-muted">Sistem Manajemen Apotek</p>
        </div>

        <!-- Row untuk Form Login -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4 text-secondary">Login</h4>
                        <form>
                            <!-- Username -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" placeholder="username">
                                <!-- <label for="username">Username</label> -->
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="password">
                                <!-- <label for="password">Password</label> -->
                            </div>

                            <!-- Tombol Login -->
                            <div class="d-grid mt-4">
                                <button type="submit" id="tombol_login" class="btn btn-warning btn-lg text-white fw-bold">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-4 text-muted">
            <small>&copy; 2024 Apotek Zara</small>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/Jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="asset/bootstrap_4/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="asset/sweetalert/dist/sweetalert2.min.js"></script>

    <script>
      $("#tombol_login").click(function(event) {
          // Mencegah submit form default
          event.preventDefault();

          var username = $("#username").val();
          var password = $("#password").val();

          // Validasi input kosong
          if (!username || !password) {
              Swal.fire({
                  icon: 'warning',
                  title: 'Peringatan',
                  text: 'Username dan password tidak boleh kosong!',
                  showConfirmButton: true
              });
              return;
          }

          $.ajax({
              type: "GET",
              url: "ajax/ceklogin.php",
              data: { username: username, password: password },
              success: function(hasil) {
                  console.log(hasil); // Debug untuk memastikan respons
                  if (hasil === "berhasil") {
                      window.location = './';
                  } else {
                      Swal.fire({
                          icon: 'error',
                          title: 'Gagal Login',
                          text: 'Periksa kembali username dan password Anda.',
                          showConfirmButton: true
                      });
                  }
              },
              error: function(xhr, status, error) {
                  Swal.fire({
                      icon: 'error',
                      title: 'Kesalahan Server',
                      text: 'Terjadi kesalahan saat menghubungi server. Coba lagi nanti.',
                      showConfirmButton: true
                  });
                  console.error("Error: ", error);
              }
          });
      });
    </script>

</body>
</html>
<?php } ?>
