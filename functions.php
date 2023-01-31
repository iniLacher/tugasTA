<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "tugasta";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


function registrasi($data){
	global $conn;

	$nama = strtolower(stripslashes($data["nama"]));
	$username = strtolower(stripslashes($data["username"]));
	$telepon = mysqli_real_escape_string($conn,$data["telepon"]);
	$email = mysqli_real_escape_string($conn,$data["email"]);
	$password1 = mysqli_real_escape_string($conn,$data["password1"]);
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);


  // cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM uwong WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}
  // cek email sudah ada atau belum
	$result = mysqli_query($conn, "SELECT email FROM uwong WHERE email = '$email'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('email sudah terdaftar!')
		      </script>";
		return false;
	}
  // cek telepon sudah ada atau belum
	$result = mysqli_query($conn, "SELECT telepon FROM uwong WHERE telepon = '$telepon'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('telepon sudah terdaftar!')
		      </script>";
		return false;
	}

  // cek konfirmasi password
	if( $password1 !== $password2 ) {
		echo "<script>
				alert('Konfirmasi password tidak sama!');
		      </script>";
		return false;
	}
  // enkripsi password
	$password1 = password_hash($password1, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO uwong VALUES('', '$nama', '$username', '$telepon', '$email', '$password1')");

	return mysqli_affected_rows($conn);
  // jika tidak mengisi field
  if(empty($nama) || empty($username) || empty($telepon) || empty($email) || empty($password1) || empty($password2)) {
    echo "<script>
    alert('Mau Ngapain?? hah,Isi dulu form nya anj!')
            document.location.href ='registrasi.php';
      </script>";
    return false;
  }

}
?>
