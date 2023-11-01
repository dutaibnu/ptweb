<?php
require "koneksi.php";

session_start();

if (isset($_POST["login"])) {
  $username = strtolower($_POST["username"]);
  $pass = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' ");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['password'])) {
      // Anda dapat menghapus pengujian peran (role) di sini
      $_SESSION["akses"] = "user";
      header("location: pt4.php");
      exit;
    } else {
      echo "
        <script>
          alert('Username atau Password Anda Salah');
          document.location.href = 'login.php';
        </script>
      ";
    }
  } else {
    echo "
      <script>
        alert('Username Anda Salah');
        document.location.href = 'login.php';
      </script>
    ";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="loginregister.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="" method="POST">
        <h3>Login</h3>
        <div class="inputBox">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="inputBox">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <input type="submit" value="Login" name="login">
        <div class="links">
          <p>Belum punya akun?</p>
          <a href="register.php" class="khusus">Register</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>