<?php
require("Dbconnect.php");
$db = get_db();

$username= htmlspecialchars($_POST['username']);
$inum = htmlspecialchars($_POST['iNum']);
$id = htmlspecialchars($_POST['id']);

$date = htmlspecialchars($_POST['datte']);
$intra = htmlspecialchars($_POST['intra']);
$extra = htmlspecialchars($_POST['extra']);
$drylean = htmlspecialchars($_POST['dry_lean']);
$fat = htmlspecialchars($_POST['fat']);

$mass = htmlspecialchars($_POST['mass']);
$SMM = htmlspecialchars($_POST['SMM']);

$BMI = htmlspecialchars($_POST['BMI']);
$PBF = htmlspecialchars($_POST['pbf']);
$rarm = htmlspecialchars($_POST['RarmF']);
$larm = htmlspecialchars($_POST['LarmF']);
$trunk = htmlspecialchars($_POST['trunkF']);
$rleg = htmlspecialchars($_POST['RlegF']);
$lleg = htmlspecialchars($_POST['LlegF']);


$rarml = htmlspecialchars($_POST['RarmL']);
$larml = htmlspecialchars($_POST['LarmL']);
$trunkl = htmlspecialchars($_POST['trunkL']);
$rlegl = htmlspecialchars($_POST['RlegL']);
$llegl = htmlspecialchars($_POST['LlegL']);


$water = htmlspecialchars($_POST['water']);



try{

 $stmtc = $db->prepare('INSERT INTO comp_analysis(intra, extra, dry_lean, Body_fat, water) Values(:intra, :extra, :drylean, :bodyfat, :water);');
$stmtc->bindValue(':intra', $intra, PDO::PARAM_INT);
$stmtc->bindValue(':extra', $extra, PDO::PARAM_INT);
$stmtc->bindValue(':drylean', $drylean, PDO::PARAM_INT);
$stmtc->bindValue(':bodyfat', $fat, PDO::PARAM_INT);
$stmtc->bindValue(':water', $water, PDO::PARAM_INT);
$stmtc->execute();

$stmtm = $db->prepare('INSERT INTO muscle(mass, smm, fat) Values(:mass, :smm, :fat);');
$stmtm->bindValue(':mass', $mass, PDO::PARAM_INT);
$stmtm->bindValue(':smm', $SMM, PDO::PARAM_INT);
$stmtm->bindValue(':fat', $fat, PDO::PARAM_INT);
$stmtm->execute();

$stmtf = $db->prepare('INSERT INTO seg_fat(rarm, larm, trunk, rleg, lleg) Values(:rarm, :larm, :trunk, :rleg, :lleg);');
$stmtf->bindValue(':rarm', $rarm, PDO::PARAM_INT);
$stmtf->bindValue(':larm', $larm, PDO::PARAM_INT);
$stmtf->bindValue(':trunk', $trunk, PDO::PARAM_INT);
$stmtf->bindValue(':rleg', $rleg, PDO::PARAM_INT);
$stmtf->bindValue(':lleg', $lleg, PDO::PARAM_INT);
$stmtf->execute();

$stmto = $db->prepare('INSERT INTO obesity(bmi, pbf) Values(:bmi, :pbf);');
$stmto->bindValue(':bmi', $BMI, PDO::PARAM_INT);
$stmto->bindValue(':pbf', $PBF, PDO::PARAM_INT);
$stmto->execute();

$stmtl = $db->prepare('INSERT INTO lean(rarml, larml, trunkl, rlegl, llegl) Values(:rarml, :larml, :trunkl, :rlegl, :llegl);');
$stmtl->bindValue(':rarml', $rarml, PDO::PARAM_INT);
$stmtl->bindValue(':larml', $larml, PDO::PARAM_INT);
$stmtl->bindValue(':trunkl', $trunkl, PDO::PARAM_INT);
$stmtl->bindValue(':rlegl', $rlegl, PDO::PARAM_INT);
$stmtl->bindValue(':llegl', $llegl, PDO::PARAM_INT);
$stmtl->execute();



$stmtp = $db->prepare('INSERT INTO person(username, inumber) Values(:username, :inum);');
$stmtp->bindValue(':username', $username, PDO::PARAM_STR );
$stmtp->bindValue(':inum', $inum, PDO::PARAM_INT );
$stmtp->execute(); 

header("location: inbody.php");
die();
 }
catch(PDOException $ex)
{
  echo "error inserting into database";
  die();
} 
?>