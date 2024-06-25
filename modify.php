<?php
  require_once '/home/mir/lib/db.php';

  $pid = $_GET['pid'];
  $uid = $_GET['uid'];

  $post = get_post($pid);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($uid == $post['uid']) { ?>
    <form action="changepost.php">
      <input type="hidden" name="pid" value="<?php echo $pid; ?>">
        <label for="titel">Titel:</label> <br>
      <input type="text" name="titel" value="<?php echo $post['title']; ?>"><br><br>
        <label for="indhold">Indhold:</label> <br>
      <input type="text" name="indhold" value="<?php echo $post['content']; ?>">
      <input type="submit" name="submit" value="Change">
    </form>
    <?php
  } else {
    echo $post['title'];
    echo $post['content'];
    echo "<br>";
    echo $post['uid'];
  } ?>
  </body>
</html>
