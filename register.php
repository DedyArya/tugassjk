<?php

require 'function.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="anggota">
      <h3>Nama Anggota Kelompok :</h3>
      <h3>1. Dedy Arya Kusuma (1462200238)</h3>
      <h3>2. Moch. Nazer Fadhillah (1462200278)</h3>
      <h3>3. Arganda Fasha Sadewa (1462200288)</h3>
      <h3>4. Daffa Bagus Fauzi (1462200251)</h3>
      <h3>5. M. Dewanta Dermawan (1462200289)</h3>
      <h3>6. Satria Dimar Putra (1462200178)</h3>
    </div>
    <div class="container">
      <h2>REGISTER</h2>
      <form method="post">
        <div class="field">
          <input type="text" name="username" id="username" required />
          <span></span>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" id="password" required />
          <span></span>
          <label>Password</label>
        </div>
        <button type="submit" name="register"id="register">Register</button>
        <div class="account">Sudah Punya Akun? <a href="login.php">Login</a></div>
      </form>
    </div>
  </body>
</html>
