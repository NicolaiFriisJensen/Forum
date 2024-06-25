<!DOCTYPE html>

<html>
  <head>
    <title>Liste over brugerens opslag:</title>
  </head>
  <body>
    <h1>Liste over brugerens opslag:</h1>
    <h2>
    </h2>
    <h3> <a href="forside.php">Forside</a> <br> </h3>
    <h3> <a href="loginform.html">Log ind</a> <br> </h3>
    <h3> <a href="logud.php">Log ud</a> <br> </h3>
    <h3> <a href="addbrugerform.html">Opret bruger</a> <br> </h3>
    <h3> <a href="opgave3.php">Liste over brugere</a> <br> </h3>

    <?php
      // Import database functions
      require_once '/home/mir/lib/db.php';

      $uid = $_GET["uid"];
      $user = get_user($uid);
      $link = "opgave2.php?uid=$uid";
      echo "Bruger: ";
      echo "<a href='$link'>$uid</a>", "<br>";

      echo "Opslag: ","<br>";
      $pids = get_pids_by_uid($uid);
      foreach ($pids as $pid){

        $linket ="opgave1.php?pid=$pid";
        $post = get_post($pid);
        $posttitle = $post["title"];

        echo "<a href='$linket'>$posttitle</a>", "<br>";


}

     ?>
  </body>
</html>
