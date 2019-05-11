<?php session_start() ;

echo "Your shopping cart contains:";
foreach($_SESSION["cart"] as $item){
    echo $item;
    echo "<br>";
}

?>