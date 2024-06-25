<?php
  require_once '/home/mir/lib/db.php';

  $uid = $_POST['uid'];
  $titel = $_POST['titel'];
  $indhold = $_POST['indhold'];


  if (!empty($uid) && !empty($titel)) {
     $pid = add_post($uid, $titel, $indhold);
     $iid = add_image($_FILES['filename']['tmp_name'], ".png");

     add_attachment($pid, $iid);
    echo "Det gik fint!","<br>";
        echo "<a href='forside.php'>Tilbage til forsiden</a> <br>";
  } else {
    echo "Noget gik galt","<br>";
        echo "<a href='form.html'>Prøv igen</a> <br>";
  }

 ?>
