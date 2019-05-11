<?php session_start(); 

    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
    $items = $_POST["item"];

    foreach($items as $item){
        array_push($_SESSION["cart"], $item);
    }

?>
<html>
    <head>
        <title>Browse</title>
    </head>
    <body>
        <form action="" method="POST">
        <h1>School supplies on sale</h1>

        Back Pack: $30 <input type="checkbox" name="item[]" id="backpack" value="backPack"> <br>
        pencil: $5 <input type="checkbox" name="item[]" id="pencil" value="pencil"> <br> 
        notebook: $15 <input type="checkbox" name="item[]" id="notebook" value="notebook"> <br>
        laptop: $350 <input type="checkbox" name="item[]" id="laptop" value="laptop"> <br>

        <input type="submit" value="submit">
    </form>
    <a href="cart.php"></a>
    </body>
</html>