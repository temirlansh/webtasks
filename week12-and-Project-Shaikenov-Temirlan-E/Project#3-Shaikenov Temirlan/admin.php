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
			min-height: calc(100vh - 300px);
	}

.red{
			border:2px solid black;
			border-radius: 10px;
			width: 400px;
			display: flex;
			flex-direction: row;
		}
		.red2{
			margin-left: 40px;
		}
		img{
			margin-left: 5px;
			margin-top: 10px;
		}


	.table1{
		border:1px solid #424242; 
		width: 50%;
		font-size: 25px;
		margin-left: -100px;
		margin-top: 100px;
	}
	.table1 img{
		width: 30px;
		margin-top: 5px;
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
<center>

<form action="delete.php" method="post" enctype="multipart/form-data">
Model <input type="text" name="model">
<input type="Submit" value="DELETE">

</form>
<hr>


<form action="update.php" method="post" enctype="multipart/form-data">
Id <input type="number" name="id">
<p>Maker  <select name="maker">
	<option value="6">Audi</option>
	<option value="7">BMW</option>
	<option value="8">Mustang</option>
	<option value="9">Ferrari</option>
	<option value="10">Toyota</option>
	<option value="11">Lamborghini</option>
</select></p>

<p>Model <input type="text" name="model" ></p>

<p>Price <input type="number" name="cost"></p>
<p>Year <input type="number" name="year"></p>
<input type="Submit" value="UPDATE">

</form>
<hr>


<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=6 and makers.maker_id=6";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>

<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=7 and makers.maker_id=7";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>


<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=8 and makers.maker_id=8";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>



<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=9 and makers.maker_id=9";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>
<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=10 and makers.maker_id=10";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>


<?php
	# code...

$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=12 and makers.maker_id=12";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];
	$id=$result['id'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element2.php\">
	 <p> ".$id." ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}


?>

</center>
</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>