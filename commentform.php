<?php
session_start();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <title>Lav en kommentar</title>
      <style>
        h1 {
          color: #8A2BE2;
          font-weight: bolder;
        }
      </style>
  </head>

  <body>

<?php
      require_once '/home/mir/lib/db.php';

      $uid = $_GET['uid'];
      $pid = $_GET['pid'];
      $session = $_SESSION['uid'];
?>
    <h1>Lav en kommentar</h1>
    <form action="addcomment.php">
        <label for="uid">Dit brugernavn:</label> <br>
      <input type="text" name="uid" value="<?php echo"$session";?>" readonly size="20"><br><br>
        <label for="pid">ID på opslaget du kommenterer på:</label> <br>
      <input type="text" name="pid" value="<?php echo"$pid";?>" readonly size="20"><br><br>

        <label for="indhold">Din kommentar:</label> <br>
        <input type="text" name="indhold" style="height: 100px; width: 300px;"><br><br>
        <input type="submit" value="Submit">
    </form>

  </body>
</html>
