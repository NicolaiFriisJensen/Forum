<?php
session_start();

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <title>Login</title>
</head>
<body>

  <div class="container-fluid p-5 bg-danger text-white text-center">
    <h1>Hov!</h1>
    <p>De indtastede oplysninger er inkorrekte.</p>
  </div>

  <?php

    require_once '/home/mir/lib/db.php';


  $brugernavn = $_POST['uid'];
  $password = $_POST['password'];



if(!empty($brugernavn) && !empty($password)){
  $korrekt = login($brugernavn, $password);

    if ($korrekt){

      $_SESSION['uid'] = $brugernavn;
      header('location: forside.php');
      exit;
    }
}



?>

<div class="container mt-5">
De indtastede login-oplysninger passer ikke med databasen.
<br>
<br>
<a href="loginform.html" class="btn btn-primary">Prøv Igen</a>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
