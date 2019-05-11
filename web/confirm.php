<?php session_start() ;
 $_SESSION["address"] = htmlspecialchar($_POST["address"]);
 $_SESSION["city"] = htmlspecialchar($_POST["city"]);
 $_SESSION["state"] = htmlspecialchar($_POST["state"]);
 $_SESSION["zip"] = htmlspecialchar($_POST["zip"]);

echo 'Your shopping cart contains: <br> <form  method="POST" action="cart.php" >';
foreach($_SESSION["cart"] as $product){
    echo $product;
    echo "<br>";
}
echo "the shipping addres is:" . $_SESSION["address"] . " " . $_SESSION["city"] . ", " .  $_SESSION["state"] . ", " .  $_SESSION["zip"]
?>
<html>
    <head>
        <title>confirmation page</title>
    </head>
    <body>
        
    </body>
</html>