<?php
require("Dbconnect.php");
$db = get_db();

$name = htmlspecialchars($_POST['name']);
$inum = htmlspecialchars($_POST['iNum']);

$date = htmlspecialchars($_POST['date']);
$intra = htmlspecialchars($_POST['intra']);
$extra = htmlspecialchars($_POST['extra']);
$drylean = htmlspecialchars($_POST['dry_lean']);
$fatmass = htmlspecialchars($_POST['fatmass']);

$weight = htmlspecialchars($_POST['date']);
$SMM = htmlspecialchars($_POST['smm']);

$BMI = htmlspecialchars($_POST['BMI']);
$PBF = htmlspecialchars($_POST['pbf']);
$rarm = htmlspecialchars($_POST['RarmF']);
$larm = htmlspecialchars($_POST['LarmF']);
$trunk = htmlspecialchars($_POST['trunkF']);
$rleg = htmlspecialchars($_POST['RlegF']);
$lleg = htmlspecialchars($_POST['LlegF']);


$rarml = htmlspecialchars($_POST['Rarml']);
$larml = htmlspecialchars($_POST['LarmL']);
$trunkl = htmlspecialchars($_POST['trunkL']);
$rlegl = htmlspecialchars($_POST['RlegL']);
$llegl = htmlspecialchars($_POST['LlegL']);


$water = htmlspecialchars($_POST['water']);


$stmt = $db->prepare('INSERT INTO person(name, inumber, date) Values(:name, :inum, :date);');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':inum', $inum, PDO::PARAM_INT);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO comp_analysis(intra, extra, dry_lean, Body_fat) Values(:intra, :extra, :drylean, :bodyfat);');
$stmt->bindValue(':intra', $intra, PDO::PARAM_INT);
$stmt->bindValue(':extra', $extra, PDO::PARAM_INT);
$stmt->bindValue(':drylean', $drylean, PDO::PARAM_INT);
$stmt->bindValue(':bodyfat', $fatmass, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO muscle(weight, smm, fat) Values(:weight, :smm, :fat);');
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':smm', $smm, PDO::PARAM_INT);
$stmt->bindValue(':fat', $fatmass, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO obesity(bmi, pbf) Values(:bmi, :pbf);');
$stmt->bindValue(':bmi', $name, PDO::PARAM_INT);
$stmt->bindValue(':pbf', $name, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO seg_fat(rarm, larm, trunk, rleg, lleg) Values(:rarm, :larm, :trunk, :rleg, :lleg);');
$stmt->bindValue(':rarm', $rarm, PDO::PARAM_INT);
$stmt->bindValue(':larm', $larm, PDO::PARAM_INT);
$stmt->bindValue(':trunk', $trunk, PDO::PARAM_INT);
$stmt->bindValue(':rleg', $rleg, PDO::PARAM_INT);
$stmt->bindValue(':lleg', $lleg, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO lean(rarml, larml, trunkl, rlegl, llegl) Values(:rarml, :larml, :trunkl, :rlegl, :llegl);');
$stmt->bindValue(':rarml', $rarml, PDO::PARAM_INT);
$stmt->bindValue(':larml', $larml, PDO::PARAM_INT);
$stmt->bindValue(':trunkl', $trunkl, PDO::PARAM_INT);
$stmt->bindValue(':rlegl', $rlegl, PDO::PARAM_INT);
$stmt->bindValue(':llegl', $llegl, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('INSERT INTO muscle(weight, smm, pbf, water) Values(:weight :smm, :pbf, :water);');
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':smm', $smm, PDO::PARAM_INT);
$stmt->bindValue(':pbf', $name, PDO::PARAM_INT);
$stmt->bindValue(':water', $water, PDO::PARAM_INT);
$stmt->execute();

header("location: inbody.php");
die();
?>