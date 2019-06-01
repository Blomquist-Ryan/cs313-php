<?php
require("Dbconnect.php");
$db = get_db();

if(!isset($_GET['id']))
{
  die("Error id not set");
};
$id = htmlspecialchars($_GET['id']);

try{


$stmt  = $db->prepare('SELECT * FROM seg_fat s, muscle m, comp_analysis c, history h, lean l, obesity o, person p, 
  WHERE s.id=:id AND m.id=:id AND c.id=:id AND h.id=:id AND l.id=:id AND o.id=:id AND p.user_id=:id');
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
// foreach($db->query('SELECT * FROM person, muscle, comp_analysis, obesity, seg_fat, history') as $row)
foreach($tests as $row)
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