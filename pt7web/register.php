<?php
require "koneksi.php";

if (isset($_POST["register"])) {
  $username = strtolower(mysqli_real_escape_string($koneksi, $_POST["username"]));
  $pass = $_POST["password"];
  $konfirmasi = $_POST["konfirmasi"];

  if ($pass === $konfirmasi) {
    // Check if the username is already taken
    $check_username = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $check_username);

    if (mysqli_fetch_assoc($result)) {
      echo "<script>alert('Username telah digunakan'); window.location.href = 'register.php';</script>";
    } else {
      // Hash the password
      $pass = password_hash($pass, PASSWORD_DEFAULT);
      
      // Insert the user into the database
      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$pass')";
      $result = mysqli_query($koneksi, $sql);

      if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>alert('Registrasi berhasil'); window.location.href = 'login.php';</script>";
      } else {
        echo "<script>alert('Registrasi gagal'); window.location.href = 'register.php';</script>";
      }
    }
  } else {
    echo "<script>alert('Password tidak sama'); window.location.href = 'register.php';</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="loginregister.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="" method="POST">
        <h3>Register</h3>
        <div class="inputBox">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="username" required>
        </div>
        <div class="inputBox">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="password" required>
        </div>
        <div class="inputBox">
          <label for="">Konfirmasi Password</label>
          <input type="password" name="konfirmasi" placeholder="password" required>
        </div>
        <input type="submit" value="Register" name="register">
        <a href="login.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>