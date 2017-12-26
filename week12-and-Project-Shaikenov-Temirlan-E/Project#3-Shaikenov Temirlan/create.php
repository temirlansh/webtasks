<!DOCTYPE html>
<html>
<head>
	<title>Sport Car</title>
	<style>
	body{
		max-width: 100%;
		overflow-x: hidden;
		margin: 0;
		padding: 0;
	}
	header{
		display: inline-flex;
			width: 100%;
			height: 100px;
			background-color: #424242;
			border:1px solid #424242;		
	}
	.for1{
		display: flex;
    	flex-direction: row;
	}
	.p22{
		display: none;
	}
	.p1{
			color: white;
			font-size: 45px;
			margin: 10px 0 0 50px;
	}
	.a1{
		color: white;
		font-size: 20px;
		margin: 30px 0 0 150px;

	}
	.a1:hover{
		color: #1C1C1C;
	}
	.a2{
		color: white;
		font-size: 20px;
		margin: 30px 0 0 400px;

	}
	.a2:hover{
		color: #1C1C1C;
	}
	.i1{
		height: 50px;
		width: 60px;
		margin: 20px 0 0 60px;
	}
	.a3{
		color: white;
		font-size: 20px;
		margin: 30px 0 0 20px;

	}
	.a3:hover{
		color: #1C1C1C;
	}
	menu{
			width: 100%;
			padding-bottom:150px;
			min-height: calc(100vh - 250px);
	}
	.r1{
		margin-top: 30px;
		display: flex;
		flex-direction: row;
	}
	.r2{
		margin-top: 20px;
		margin-left: 30px;
		border:1px solid black;
		width: 150px;
		height: 250px;
	}
	footer{
		background-color: #424242;
		
			width: 100%;
			height: 10%;
	}
	.p2{
		color: white;
		margin: 20px 0 0 40px;
	}
	@media screen and (max-width: 1100px) {
    header{height: 100%;
    	
    	display: flex;
    	flex-direction: column;
    	width: 100%;
    }
    .md{
    	position: relative;
       display: inline-block;
       color: #424242;
    }
    .md1{
    	display: none;
    position: absolute;
    background-color: #424242;
    min-width: 300px;
    min-height: 220px;
    z-index: 1;
    }
    .i1{
    	display: none;
    }
    .md:hover .md1 {
    display: block;
}
.p1{
	font-size: 20px;
}
.p22{
	display: flex;
color: white;
font-size: 40px;
}
    .a1{
    	text-decoration-line: none;
    	margin-left: 49px;
    }
    .a2{
    	text-decoration-line: none;
    	margin-left: 49px;
    }
    .a3{
    	text-decoration-line: none;
    	margin-left: 49px;
    }
    .for1{
    	display: flex;
    	flex-direction: column;
    }
    menu{
    	display: inline-block;
    	width: 100%;
    }
    footer{
    	display: inline-block;
    	width: 100%;
    }
}
@media print{
	header{
		display: none;
	}
	footer{
		display: none;
	}
}
	</style>
</head>
<body>
<header>
	<div class="md"><p class="p22">Menu</p>
	<div class="md1"><div class="for1">
	<a href="main.php" style="text-decoration-line: none;">
	<h1 class="p1">Sport Car</h1></a>
	<a href="create.php" class="a1">Submit an advertisement</a>
	<a href="registration.php" class="a2">Registration</a>
	<img src="key.png" class="i1">
	<a href="login.php" class="a3">Log in</a></div></div></div>
</header>

 
<menu>
<form action="create.php" method="post" enctype="multipart/form-data">
<p>Maker  <select name="maker">
	<option value="6">Audi</option>
	<option value="7">BMW</option>
	<option value="8">Mustang</option>
	<option value="9">Ferrari</option>
	<option value="10">Toyota</option>
	<option value="11">Lamborghini</option>
</select></p>

<p>Model <input type="text" name="model" required></p>

<p>Price <input type="number" name="cost" required></p>
<p>Image <input type="file" name="image" required></p>
<p>Year <input type="number" name="year" required></p>


	<input type="submit" value="Submit" name="sss">
</form>





<?php
$db= mysqli_connect("127.0.0.1","root","","project");
if(isset($_POST['sss'])){
$maker=$_POST["maker"];
$model=$_POST["model"];
$price=$_POST["cost"];
$year=$_POST["year"];

$image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
$imagename=addslashes($_FILES['image']['name']);


$query = "INSERT INTO `cars` (`maker_id`,`model`,`price`,`image`,`imagename`,`year`) values ('$maker','$model',$price,'$image','$imagename','$year')";
	$db->query($query);}
?>




</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>