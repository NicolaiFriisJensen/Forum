<?php
  require_once '/home/mir/lib/db.php';

  $uid = $_GET['uid'];
  $pid = $_GET['pid'];
  $content = $_GET['indhold'];


  if (add_comment($uid, $pid, $content)) {
    echo "Det gik fint!";
    ?>
    <h4> <a href="forside.php">Tryk her for at komme tilbage til forsiden</a> <br> </h4>
    <?php
  } else {
    echo "Noget gik galt";
  }

 ?>
