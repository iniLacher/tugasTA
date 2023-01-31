<?php 
require 'functions.php';
// session_start();
if( isset($_POST["register"]) ) {

    if (registrasi ($_POST)  > 0 ){
        echo "<script>
                alert('Selamat Anda Berhasil Registrasi');
                window.location = 'index.php';
              </script>";
    } else {
      echo mysqli_error($conn);
    } 
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registrasi.css" />
  </head>
  <body>
  <div class="container-fluid mb-5">
    <div class="col-10 offset-1 mt-3 col-sm-12 text-sm-center"><img src="img/logo.svg" alt=""></div>
    <div class="row">
      <div class="col-xxl-7 col-lg-7 col-md-6 col-sm2"></div>
      <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-10 form pb-3 pt-5">
        <h3 class="text-center mb-3">Registrasi</h3>
        <form method="post" action="">
          <label class="form-label" for="nama">Nama</label>
          <input class="form-control shadow-none" type="text" name="nama" id="nama"
          placeholder="Masukkan Nama...." autofocus autocomplete="off" required>
          <label class="form-label" for="username">Username</label>
          <input class="form-control shadow-none" type="text" name="username" id="username"
          placeholder="Masukkan Username...." autofocus autocomplete="off" required>
          <label class="form-label" for="telepon">Nomor Telepon</label>
          <input class="form-control shadow-none" type="tel" name="telepon" id="telepon"
          placeholder="Masukkan No Telepon...." autocomplete="off" required>
          <label class="form-label" for="email">Email</label>
          <input class="form-control shadow-none" type="email" name="email" id="email"
          placeholder="Masukkan Email...." autocomplete="off" required>
          <label class="form-label" for="password1">Password</label>
          <input class="form-control shadow-none" type="password" name="password1" id="password1"
          placeholder="Masukkan Password...." autocomplete="off" required>
          <label class="form-label" for="password2">Konfirmasi Password</label>
          <input class="form-control shadow-none" type="password" name="password2" id="password2"
          placeholder="Konfirmasi Password ...." autocomplete="off" required>
          <div class="col-12 text-center">
            <button type="submit" name="register">Registrasi</button>
          </div>
        </form>
        <p class="text-center mt-3">Sudah Punya Akun?<a href="login.php">Login</a></p>
      </div>
      
    </div>
</div>
    <!-- Script Bootsrap -->
    <script src="js/bootstrap.esm.min.js"></script>
    <!-- end Script Bootsrap -->
  </body>
</html>
