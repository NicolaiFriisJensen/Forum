<?php
require_once '/home/mir/lib/db.php';

$uid = $_GET['uid'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$password = $_GET['password'];

if (add_user($uid, $firstname, $lastname, $password)) {
  echo "Det gik fint!", "<br>";
  echo "<a href='forside.php'>Tilbage til forsiden</a>";
} else {
  echo "Noget gik galt","<br>";
  echo "<a href='addbrugerform.html'>Prøv igen.</a>";
}

?>
