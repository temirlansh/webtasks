<?php
   $db = mysqli_connect("127.0.0.1","root","","project");
$id = $_POST["model"];
$query = "DELETE FROM `cars` WHERE model='$id'";
echo "Deleted";
$db->query($query);
  ?>
  <a href="admin.php">Back</a>