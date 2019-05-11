<?php session_start() ;

echo "Your shopping cart contains: <br>";
foreach($_SESSION["cart"] as $item){
    echo $item;
    echo "<br>";
}

?>
<html>
    <head>
        <title>shopping cart</title>
    </head>
    <body>
        <a href="checkout.php">checkout</a>
        <a href="browse.php">continue Shopping</a>
    </body>