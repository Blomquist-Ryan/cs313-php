<?php session_start() ;

echo 'Your shopping cart contains: <br> <form  method="POST" action="cart.php" >';
foreach($_SESSION["cart"] as $product){
    echo $product . "<input type=\"checkbox\" name=\"item[]\" id=\"$product\" value=\"$product\">";
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