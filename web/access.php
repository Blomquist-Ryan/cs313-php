<?php
require("Dbconnect.php");
$db = get_db();

if(!isset($_GET['id']))
{
  die("Error id not set");
};
$id = htmlspecialchars($_GET['id']);

try{


$stmt  = $db->prepare('SELECT * FROM seg_fat s, muscle m, comp_analysis c, lean l, obesity o, person p 
  WHERE s.id=:id AND m.id=:id  AND c.id=:id AND l.id=:id AND o.id=:id AND p.id=:id ');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$tests = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $ex)
{
  echo "error";
  die();
}
?>
<!DOCTYPE html>
<html>
  <body>
 

  </body>
</html>




<?php
foreach($tests as $row)
{
    echo '<h2>user: ' . $row['username'] . "<br></h2> <hr>";

    echo "<h3>Body Composition Analysis</h3>";
    echo '<p>Intracellular Water: ' . $row['intra'] . "<br>";
    echo 'Extracellular Water: ' . $row['extra'] . "<br>";
    echo 'Dry Lean Mass: ' . $row['dry_lean'] . "<br>";
    echo 'Body Fat Mass: ' . $row['body_fat'] . "<br> </p><hr>";

    echo "<h3>Muscle_Fat Analysis</h3>";
    echo 'weight: ' . $row['mass'] . "<br>";
    echo 'Skeletal Muscle Mass: ' . $row['smm'] . "<br>";
    echo 'Body Fat Mass: ' . $row['fat'] . "<br> <hr>";

    echo "<h3>Obesity Analysis</h3>";
    echo 'BMI: ' . $row['bmi'] . "<br>";
    echo 'PBF: ' . $row['pbf'] . "<br>";
    echo 'Right Arm: ' . $row['rarm'] . "<br>";
    echo 'Left Arm: ' .  $row['larm'] . "<br>";
    echo 'Trunk: ' .     $row['trunk'] . "<br>";
    echo 'Right Leg: ' . $row['rleg'] . "<br>";
    echo 'Left Leg: ' .  $row['lleg'] . "<br> <hr>";

    echo "<h3>Segmental Lean Analysis</h3>";
    echo 'Right Arm: ' . $row['rarml'] . "<br>";
    echo 'Left Arm: ' .  $row['larml'] . "<br>";
    echo 'Trunk: ' .     $row['trunkl'] . "<br>";
    echo 'Right Leg: ' . $row['rlegl'] . "<br>";
    echo 'Left Leg: ' .  $row['llegl'] . "<br> <hr>";



    echo "<h3>Body Composition History</h3>";
    echo 'Weight: ' . $row['mass'] . "<br>";
    echo 'Skelatal Muscle Mass: ' . $row['smm'] . "<br>";
    echo 'PBF: ' . $row['pbf'] . "<br>";
    echo 'ECW/TBW: ' . $row['water'] . "<br> <br> <br> <br> <br>";

    echo " <a href='inbody.php'>  return</a>";
}