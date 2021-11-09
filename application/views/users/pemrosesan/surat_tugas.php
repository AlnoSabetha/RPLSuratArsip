<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Surat Tugas</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
    <h4>Nama</h4>
	<input type="text" placeholder="Nama" name="nama" required>
    <h4>Nim</h4>
    <input type="text" placeholder="Nim" name="nim" required>
    <h4>Nama Mitra</h4>
    <input type="text" placeholder="Nama Mitra" name="namamitra" required>
    <h4>Alamat Mitra</h4>
    <input type="text" placeholder="Alamat" name="alamat" required>
    <h4>Tanggal</h4>
    <input type="date" name="tanggal" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>