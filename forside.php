<?php
session_start();

 ?>


<!DOCTYPE html>

<html>
  <head>
    <title>Forside</title>
  </head>

  <body>
    <h1>Velkommen!</h1>
    <h2>Opret dig som bruger eller log in for at kunne oprette indlæg mm. <h2/>
    <h3> <a href="forside.php">Forside</a> <br> </h3>
    <h3> <a href="loginform.html">Log ind</a> <br> </h3>
    <h3> <a href="logud.php">Log ud</a> <br> </h3>
    <h3> <a href="addbrugerform.html">Opret bruger</a> <br> </h3>
    <h3> <a href="opgave3.php">Liste over brugere</a> <br> </h3>
    <h3>Alle opslag</h3>

    <?php
      require_once '/home/mir/lib/db.php';
      $sess = $_SESSION['uid'];
      $postid = $post['pid'];
      $pids = get_pids();
      $cids = get_cids();
        $brugernavn = $_POST['uid'];
        $password = $_POST['password'];


  if (!empty($_SESSION['uid'])){
          $user = get_user($_SESSION["uid"]);

        echo "Du er logget ind.","<br>";
        echo "<a href='form.html'>Lav et opslag</a>  <br> <br>";
      $pids = get_pids();
      foreach ($pids as $pid){


        $post = get_post($pid);
        $postid = $post['pid'];
        $postuid = $post['uid'];
        $link = "opgave2.php?uid=$postuid";

        echo 'Forfatter: ';
        echo "<a href='$link'>$postuid</a>";
        echo "<br>";

        echo 'Titel: ';
        echo $post["title"];
        echo "<br>";

        echo 'Indhold: ';
        echo $post["content"];
        echo "<br>";

        echo 'Dato: ';
        echo $post["date"];

        if ($post["uid"] == $_SESSION['uid']){
          echo "<a href='modify.php?pid=$postid&uid=$postuid'> Edit</a>";
        }
        echo "<br>";
        $iids = get_iids_by_pid($pid);
           foreach ($iids as $iid) {
             if ($iid == 0) {
               continue;
             }
             $image = get_image($iid);
             $imageIid = $image["iid"];
             $imagePath = $image["path"];
             echo "<img src='$imagePath' alt='Billede med iid: $iid' width='100px'>";
             echo "<br>";
           }


      echo "<br> <br>";
        $cids = get_cids_by_pid($pid);

foreach ($cids as $cid) {
  $comment = get_comment($cid);
  $commentuser = $comment["uid"];
  $commentid = $comment['cid'];
  $link = "opgave2.php?uid=$commentuser";

  echo 'Kommentar af ';
  echo "<a href='$link'>$commentuser</a>";
  echo ': "';
  echo $comment["content"];
  echo '". Skrevet d. ';
  echo $comment["date"];
  if($commentuser == $_SESSION['uid']){
    echo "<a href='deletecomment.php?cid=$commentid'>- Slet</a>";
  } else if($post['uid'] == $_SESSION['uid']){
    echo "<a href='deletecomment.php?cid=$commentid'>- Slet</a>";
  }
  echo "<br>";

}
echo "<a href='commentform.php?pid=$postid&uid=$sess'>Lav en kommentar</a>";
echo "<br> <br> <br> <br> <br>";
}
    exit;
            } else {
      echo "Du er IKKE logget ind.","<br> <br> <br>";
    $pids = get_pids();
    foreach ($pids as $pid){

      $post = get_post($pid);
      $postuid = $post['uid'];
      $link = "opgave2.php?uid=$postuid";

      $post = get_post($pid);
      echo 'Forfatter: ';
      echo "<a href='$link'>$postuid</a>";
      echo "<br>";

      echo 'Titel: ';
      echo $post["title"];
      echo "<br>";

      echo 'Indhold: ';
      echo $post["content"];
      echo "<br>";

      echo 'Dato: ';
      echo $post["date"];
      echo "<br>";
      $iids = get_iids_by_pid($pid);
         foreach ($iids as $iid) {
           if ($iid == 0) {
             continue;
           }
           $image = get_image($iid);
           $imageIid = $image["iid"];
           $imagePath = $image["path"];
           echo "<img src='$imagePath' alt='Billede med iid: $iid' width='100px'>";
           echo "<br>";
         }

      echo "<br> <br>";

      $cids = get_cids_by_pid($pid);

foreach ($cids as $cid) {
  $comment = get_comment($cid);
  $commentuser = $comment["uid"];
  $link = "opgave2.php?uid=$commentuser";

  echo 'Kommentar af ';
  echo "<a href='$link'>$commentuser</a>";
  echo ': "';
  echo $comment["content"];
  echo '". Skrevet d. ';
  echo $comment["date"];
  echo "<br>";

}
echo "<br> <br> <br> <br>";
    }
    exit;
    }

    if(!empty($brugernavn) && !empty($password)){
      $korrekt = login($brugernavn, $password);

        if ($korrekt){

          $_SESSION['uid'] = $brugernavn;
          exit;
        }
    }

     ?>
  </body>
</html>
