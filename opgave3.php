<!DOCTYPE html>

<html>
  <head>
    <title>Liste over brugere:</title>
  </head>
  <body>
    <h1>Liste over brugere:</h1>
    <h3> <a href="forside.php">Forside</a> <br> </h3>
    <h3> <a href="loginform.html">Log ind</a> <br> </h3>
    <h3> <a href="logud.php">Log ud</a> <br> </h3>
    <h3> <a href="addbrugerform.html">Opret bruger</a> <br> </h3>
    <h3> <a href="opgave3.php">Liste over brugere</a> <br> </h3>
    <?php
      // Import database functions
      require_once '/home/mir/lib/db.php';

      $uid = $_GET["uid"];
      echo "Brugere: ", "<br>";
      $uids = get_uids();
      foreach ($uids as $uid){

      $user = get_user($uid);
      $userid =$user["uid"];
      $link = "opgave2.php?uid=$userid";


      echo "<a href='$link'>$userid</a>", "<br>";

}
     ?>
  </body>
</html>
