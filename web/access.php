<?php
require("Dbconnect.php");
$db = get_db();

if(isset($_GET['id']))
{
  die("Error id not set");
};
$id = htmlspecialchar($_GET['id']);
?>
<!DOCTYPE html>
<html>
  <body>
    <form action="access.php" method="post">

  <input type="submit" name="submit" value="submit">
</form>
  </body>
</html>




<!-- <?php
try{
  if(isset($POST['intra']))
  {
  echo " <br> <br> there is something in the intra field <br> <br>";
  $query ='INSERT INTO comp_anlaysis(intra, extra) VALUES(:intra, :extra) ';
  $statement = $db->prepare($query);
  $statement->bindValue(':intra',$POST["intra"] );
  $statement->bindValue(':extra',$POST["extra"]);
  $statement->execute();
}
  
}
catch(PDOException $ex)
{
  echo "error";
  die();
}
?> -->



<?php
foreach($db->query('SELECT * FROM person, muscle, comp_analysis, obesity, seg_fat, history') as $row)
{
    echo 'user: ' . $row['name'] . "<br> <hr>";

    echo 'Intracellular Water: ' . $row['intra'] . "<br>";
    echo 'Extracellular Water: ' . $row['extra'] . "<br>";
    echo 'Dry Lean Mass: ' . $row['dry_lean'] . "<br>";
    echo 'Body Fat Mass: ' . $row['body_fat'] . "<br> <hr>";

    echo 'weight: ' . $row['weight'] . "<br>";
    echo 'Skeletal Muscle Mass: ' . $row['smm'] . "<br>";
    echo 'Body Fat Mass: ' . $row['fat'] . "<br> <hr>";

    echo 'BMI: ' . $row['bmi'] . "<br>";
    echo 'PBF: ' . $row['pbf'] . "<br>";
    echo 'Right Arm: ' . $row['rarm'] . "<br>";
    echo 'Left Arm: ' .  $row['larm'] . "<br>";
    echo 'Trunk: ' .     $row['trunk'] . "<br>";
    echo 'Right Leg: ' . $row['rleg'] . "<br>";
    echo 'Left Leg: ' .  $row['lleg'] . "<br> <hr>";

    echo 'Weight: ' . $row['weight'] . "<br>";
    echo 'Skelatal Muscle Mass: ' . $row['smm'] . "<br>";
    echo 'PBF: ' . $row['pbf'] . "<br>";
    echo 'ECW/TBW: ' . $row['water'] . "<br> <br> <br> <br> <br>";
}