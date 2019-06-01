<?php
require("Dbconnect.php");
$db = get_db();

$query = 'SELECT user_id, name, date FROM person';

$stmt = $db->prepare($query);
$stmt->execute();
$user - $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($user);

/* $nameQuery = $db->prepare("SELECT name FROM person WHERE id=?");
$nameQuery->execute(['name']);
$name = $nameQuery->fetchColumn();

$stmt = $db->prepare($query);
$stmt->execute();
$tests = $stmt->fetchAll(PDO::FETCH_ASSOC);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo 'here is something new <br>';
var_dump($name); */

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
      foreach($tests as $test)
      {
          $num = $test['user_id'];
          $date = $test['date'];
          echo " Test $num on $date <br>";
      }
      ?>

    
</form>
  </body>
</html>