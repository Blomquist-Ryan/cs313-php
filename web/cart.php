<?php session_start() ;

echo "Your shopping cart contains:";
print_r( $_SESSION["cart"]);
echo "<br>";
?>