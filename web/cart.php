<?php session_start() ;

echo "Your shopping cart contains: <br>";
foreach($_SESSION["cart"] as $product){
    echo $product . "<input type=\"checkbox\" name=\"item[]\" id=\"backpack\" value=\"backPack\">";
    echo "<br>";
}

?>
<html>
    <head>
        <title>shopping cart</title>
    </head>
    <body>
        <hr>
        remove item?



        <a href="checkout.php">checkout</a>
        <a href="browse.php">continue Shopping</a>
    </body>