<?php
session_start();
?>
<!Doctype html>
<html>
    <head>
        <script>
            function add(){
                var item = document.getElementById("thing").value;
                <?php 
                $_SESSION["item"] = item;
                ?>
            }
        </script>
    </head>
    <body>
    <!-- <a href="cart.php">cart</a> -->

    <input type="text" name="" id="thing">
    <input type="button" value="Add Item" onclick="add()">
    <?php echo $_SESSION["item"];
    ?>
    </body>
</html>