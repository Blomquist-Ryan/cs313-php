<?php
try{
    $dbUrl = getenv('DATABASE_URL');
    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPass = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"]);

    $db = new PDO("psql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
    echo 'error!: ' . $ex->getMessage();
    die();
}
foreach($db->query('SELECT * FROM person') as $row)
{
    echo 'user' . $row['name'];
}