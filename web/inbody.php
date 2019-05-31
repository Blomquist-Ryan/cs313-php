<?php
require("Dbconnect.php");
$db = get_db();

$query = 'SELECT user_id, name, date FROM person';
$stmt = $db->prepare($query);
$stmt->execute();
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
      <h1><?php echo '$tests["name"]'?></h1>
      <?php
      foreach($tests as $test)
      {
          $num = $test['user_id'];
          $date = $test['date'];
          echo " Test $num on $date";
      }
      ?>

    
</form>
  </body>
</html>