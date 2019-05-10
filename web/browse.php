<?php
session_start();
?>

<html>
    <head>
       <!--  <script>
            function add(){
                <?php $item = document.getElementById("thing").value;
                
                $_SESSION["item"] = $item;
                ?>
            }
        </script> -->
    </head>
    <body>
    <!-- <a href="cart.php">cart</a> -->

    <p>there should be some text here</p>
    <input type="text" name="" id="thing">
    <input type="button" value="Add Item" onclick="add()">
    <?php echo $_SESSION["item"];
    ?>
    </body>
</html>