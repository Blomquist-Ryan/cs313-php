<?php
require("Dbconnect.php");
$db = get_db();

$query = 'SELECT id, username FROM person';

$stmt = $db->prepare($query);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$name = $user['username'];
$num = $user['id'];



$tests = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            inbody
        </title>
    </head>
  <body>
      <h1><?php echo  $name; ?></h1>
      <?php
      echo " <a href='access.php?id=$num'> Test $num on $datte <br>";
      foreach($tests as $test)
      {
          $num = $test['id'];

          echo " <a href='access.php?id=$num'> Test $num <br>";
      }
      ?>
      <a href="insertInB.php">Add InBody</a>

    
</form>
  </body>
</html>