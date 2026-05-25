<?php
include "koneksi.php";

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query ($conn, "INSERT INTO tb_users (username,email,password)
  VALUES('$username','$email','$password')");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <center><h1>Form Registrasi Login</h1>
    <table border="0">
      <tr>
        <td><td for="username">Nama Lengkap</td>
        <td><input type="text" name="username" required></td>
       </td>
      <tr>
        <td><td for="email"> Email Adress</td>
        <td><input type="email" name="email" required></td>
       </td>
      <tr>
        <td><td for="password">Password</td>
        <td><input type="password" name="password" required></td>
       </td>
      <tr>
        <td><button type="submit" name="submit">Registrasi</button></td>
       </td>

    </border>
    </center>
  </form>
</body>
</html>