<?php
  require_once '/home/mir/lib/db.php';

  $pid = $_GET['pid'];
  $titel = $_GET['titel'];
  $indhold = $_GET['indhold'];


  if (modify_post($pid, $titel, $indhold)) {
    echo "Det gik fint!","<br>";
    echo "<a href='forside.php'>Tilbage til forsiden</a> <br>";
  } else {
    echo "Noget gik galt","<br>";
        echo "<a href='modify.php'>Prøv igen</a> <br>";
  }

 ?>
