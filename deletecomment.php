<?php
  require_once '/home/mir/lib/db.php';

  $cid = $_GET['cid'];



  if (delete_comment($cid)) {
    echo "Kommentaren er nu slettet!";
    ?>
    <h4> <a href="forside.php">Tryk her for at komme tilbage til forsiden</a> <br> </h4>
    <?php
  } else {
    echo "Noget gik galt";
  }

 ?>
