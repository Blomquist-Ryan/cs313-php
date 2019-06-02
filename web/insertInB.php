<?php 
require("Dbconnect.php");
$db = get_db();

$query = 'SELECT id, username, inumber FROM person';

$stmt = $db->prepare($query);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$username = $user['username'];
$inum = $user['inumber'];
$id = $user['id'];
echo "$id <br>";
echo "$username <br>";
echo "$inum <br>";

?>
<!DOCTYPE html>
<html>
  <body>
    <form action="DBInsert.php" method="post">
        <h3>Date:</h3>
        <input type="date" name="datte" id="datte" required> <br>
        <hr>

        <h3>Body Composition Analysis</h3>
        <input type="hidden" name="username" value="<?php echo '$username'; ?>">
        <input type="hidden" name="iNum" value="<?php echo $inum ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        Intracellular Water: <input type="text" name="intra" id="inta" required> <br>
        Extracellular Water: <input type="text" name="extra" id="extra" required> <br>
        Dry Lean Mass: <input type="text" name="dry_lean" id="dry_lean" required> <br>
        Body Fat Mass: <input type="text" name="fatMass" id="fatMass" required> <br>
        <hr>

        <h3>Muscle-Fat Analysis</h3>
        Weight: <input type="text" name="mass" id="mass" required> <br>
        Skeletal Muscle Mass: <input type="text" name="SMM" id="SMM" required> <br>
        Body Fat Mass: <input type="text" name="fat" id="fat" required> <br>
        <hr>

        <h3>Obesity Analysis</h3>
        BMI: <input type="text" name="BMI" id="BMI" required> <br>
        Percent Body Fat: <input type="text" name="pbf" id="pbf" required> <br>
        <hr>

        <h3>Segmental Fat Analysis</h3>
        Right Arm: <input type="text" name="RarmF" id="RarmF" required> <br>
        Left Arm: <input type="text" name="LarmF" id="LarmF" required> <br>
        Trunk: <input type="text" name="trunkF" id="trunkF" required> <br>
        Right Leg: <input type="text" name="RlegF" id="RlegF" required> <br>
        Left Leg: <input type="text" name="LlegF" id="LlegF" required> <br>
        <hr>

        <h3>Segmental Lean Analysis</h3>
        Right Arm: <input type="text" name="RarmL" id="RarmL" required> <br>
        Left Arm: <input type="text" name="LarmL" id="LarmL" required> <br>
        Trunk: <input type="text" name="trunkL" id="trunkL" required> <br>
        Right Leg: <input type="text" name="RlegL" id="RlegL" required> <br>
        Left Leg: <input type="text" name="LlegL" id="LlegL" required> <br>
        <hr>

        <h3>ECW/TBW Analysis</h3>
        ECW/TBW: <input type="text" name="water" id="water" required> <br>



  <input type="submit" name="submit" value="submit">
  <a href="inbody.php">  return</a>
</form>
  </body>
</html>
