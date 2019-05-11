<?php session_start() ;

echo "Your shopping cart contains: <br> <form action=\"\" method=\"POST\">";
foreach($_SESSION["cart"] as $product){
    echo $product . "<input type=\"checkbox\" name=\"item[]\" id=\"$product\" value=\"$product\">";
    echo "<br>";
}

echo "<input type=\"submit\" value=\"remove item\"> </form>";

if(!isset($_SESSION["remove"])){
    $_SESSION["remove"] = array();
}
$toRemove = $items = $_POST["item"];
foreach($toRemove as $removable){
    session_unset(array_search($removable, $_SESSION["cart"]));
}



?>
<html>
    <head>
        <title>shopping cart</title>
    </head>
    <body>
        <hr>
        <!-- <form action="" method="POST">
            <input type="submit" value="remove item">
        </form> -->



        <a href="checkout.php">checkout</a>
        <a href="browse.php">continue Shopping</a>
    </body>