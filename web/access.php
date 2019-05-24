<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
foreach($db->query('SELECT * FROM person, muscle, comp_analysis, obesity, seg_fat') as $row)
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
    echo 'Left Leg: ' .  $row['lleg'] . "<br>";
}