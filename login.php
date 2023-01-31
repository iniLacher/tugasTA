<?php 

include 'functions.php';


if( isset($_POST["login"]) ) {

	$username = $_POST["nama"];
	$username = $_POST["username"];
	$username = $_POST["telepon"];
	$username = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) == 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <form action="" method="POST" class="form">
      <img src="img/logo.svg" alt="" class="img" />
      <h1>
        Belanja Furniture Utama <br/>
        Menjadi Lebih Mudah
      </h1>
      <div class="box">
        <!-- <div class="container"> -->
        <h2>LOGIN</h2>
        <span>Username:</span>
        <input type="text" name="username" placeholder="masukkan username" required autofocus autocomplete="off" />
        <br />
        <span>Password :</span>
        <input type="password" name="password" placeholder="masukkan password" required />
        <br />
        <input type="submit" name="Masuk" value="Masuk" />
        <p>Belum punya akun? <a href="registrasi.php">Register</a></p>
        <!-- </div> -->
      </div>
    </form>
  </body>
</html>
