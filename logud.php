<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["password"]);
header("Location:forside.php");
?>
