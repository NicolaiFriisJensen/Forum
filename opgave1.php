<!DOCTYPE html>
<!-- https://wits.ruc.dk/~imroed/opg1/first.php -->
<html>
  <head>
    <title>Opslag:</title>
  </head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <body>
      <div class="container-fluid p-5 bg-primary text-white text-left">
    <h1>Opslag:</h1>
  </div>

    <h2>
<div class="container_fluid p-3 bg-dark text-left">
      <a href="forside.php" class="btn btn-secondary">Forside</a>
      <a href="opgave3.php" class="btn btn-secondary">Liste over brugere</a>
      <a href="logud.php" class="btn btn-danger float-right">Log Ud</a>
      <a href="loginform.html" class="btn btn-success float-right">Log Ind</a>
      <a href="addbrugerform.html" class="btn btn-primary float-right">Opret Bruger</a>
    </div>
    </h2>
    <?php
      // Import database functions
      require_once '/home/mir/lib/db.php';

      $pid = $_GET["pid"];

      $post = get_post($pid);
      $uid = $post["uid"];
      $user = get_user($uid);
      $link = "opgave2.php?uid=$uid";
      $userF = $user["firstname"];
      $userL = $user["lastname"];
echo "<h3>";
echo "<div class='container_fluid p-3 bg-white text-black text-center position-relative'>";
      echo "Titel: ";
      echo $post["title"], "<br>";
echo "</div>";
echo "</h3>";

echo "<div class='container_fluid bg-white text-black text-center'>";
      echo "Brugernavn: ";
      echo "<a href='$link'>$uid</a>";
      echo " ";
      echo "& navn: ";
      echo "<a href='$link'>$userF $userL</a>", "<br>";
echo "</div>";

echo "<div class='container p-3 bg-light'>";
      echo "Content: ";
      echo $post["content"], "<br>";

      $iids = get_iids_by_pid($pid);
      foreach ($iids as $iid) {
        $getimage = get_image($iid);
        $imagepath = $getimage["path"];
        echo "<img src='$imagepath' style='max-width:50%;'>";
    }
echo "</div>";
echo "<br>";
echo "<div class='container bg-light'>";
      $cids = get_cids_by_pid($pid);
      foreach ($cids as $cid) {

        $comment = get_comment($cid);
        $commentuser = $comment["uid"];
        $link = "opgave2.php?uid=$commentuser";

       echo $comment["content"];
       echo " - ";
       echo "<a href='$link'>$commentuser</a>", "<br>";
    }

     ?>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
