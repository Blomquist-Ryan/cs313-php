<?php session_start() ;

echo "Your shopping cart contains:";
print_r( array_values($_SESSION["cart"]));
echo "<br>";
?>