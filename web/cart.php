<?php session_start() ;

echo "Your shopping cart contains:";
print( array_values($_SESSION["cart"]));
echo "<br>";
?>