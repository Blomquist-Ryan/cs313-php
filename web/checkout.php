<?php session_start();?>
<html>
    <head>
        <title>checkout</title>
    </head>
    <body>
        <h1>checkout information</h1>
        <form action="confirm.php" method="post">
            Street Address: <input type="text" name="address" id="street"> <br>
            City: <input type="text" name="city" id="city"> <br>
             State: <input type="text" name="state" id="state"> zip: <input type="text" name="zip" id="zip"> <br>
             <input type="submit" value="purchase">
             </form>

            <span>
                <form action="cart.php"> 
                  <input type="submit" value="back">
                </form>
            </span>

        
    </body>
</html>