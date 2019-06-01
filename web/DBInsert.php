<?php
require("Dbconnect.php");
$db = get_db();

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

var_dump($_POST);

// $stmt = $db->prepare('INSERT INTO ')
?>