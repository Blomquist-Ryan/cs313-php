<?php
require("Dbconnect.php");
$db = get_db();

$query = 'SELECT user_id, name, date FROM person';

$stmt = $db->prepare($query);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$name = $user['name'];
$num = $user['user_id'];
$date = $user['date'];


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
      echo " <a href='access.php?id=$num'> Test $num on $date <br>";
      foreach($tests as $test)
      {
          $num = $test['user_id'];
          $date = $test['date'];
          echo " <a href='access.php?id=$num'> Test $num on $date <br>";
      }
      ?>
      <a href="insertInB.php">Add InBody</a>

    
</form>
  </body>
</html>