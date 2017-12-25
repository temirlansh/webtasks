<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="t3.php">
	Your login <input type="text" name="login" required><br/>
	Your password <input type="text" name="password" required><br/>
	<input type="submit" value="Login"><br/>
</form>


	<?php
$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from reg";
$login=$_GET["login"];
$password=$_GET["password"];

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	if($result["nick"]==$login && $result["password"]==$password){
		print "<p>You in database and you login</p>";
	}else{
	}
}

?>


</body>
</html>

