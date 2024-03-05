<?php
    include "service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if($db->query($sql)){
            echo "oke data masuk";
        }else {
            echo "data gagal masuk";
        }

    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi Instagram</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <h2>Registrasi Instagram</h2>
  <form action="register.php">
    <div class="input-group">
      <input type="text" id="fullname" name="fullname"/>
    </div>

    <div class="input-group">
      <input type="text" id="username" name="username"/>
    </div>

    <div class="input-group">
      <input type="email" id="email" name="email"/>
    </div>

    <div class="input-group">
      <input type="password" id="password" name="password"/>
    </div>

    <button type="submit">Daftar</button>
  </form>
</div>
</body>
</html>
