Username:  <?php echo  $_POST["name"] ;?> <br>
MailTo: <?php echo $_POST["email"] ; ?> <br>
Major: <?php echo $_POST["major"]; ?> <br>
Comments: <?php echo $_POST["comments"]; ?> <br>
visited: <?php foreach($_POST["locations"] as $place){ echo $place ."</br>";} ?>