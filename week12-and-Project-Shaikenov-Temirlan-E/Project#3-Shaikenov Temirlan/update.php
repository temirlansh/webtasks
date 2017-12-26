<?php
$db = mysqli_connect("127.0.0.1","root","","project");
$id	= $_POST["id"];
$maker = $_POST["maker"];
$model = $_POST["model"];
$cost = $_POST["cost"];
$year = $_POST["year"];

	$query = "UPDATE `cars` SET `maker_id`='$maker',`model`='$model',`price`=$cost,`year`=$year
WHERE id=$id";
	//echo $query;
	$db->query($query);
	echo "Done";

?>
<a href="admin.php">Back</a>