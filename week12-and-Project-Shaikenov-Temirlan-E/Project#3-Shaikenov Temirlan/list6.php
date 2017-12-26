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
			min-height: calc(90vh - 250px);
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
	.rowm{
		display: flex;
		flex-direction: row;
	}
	.item{
		display: flex;
		flex-direction: row;
	}
	.row1{
		display: flex;
		flex-direction: column;
	}
	.row2{
		margin-left: 250px;
		display: flex;
		flex-direction: column;
	}
	.title{
		display: flex;
		flex-direction: row;
	}
	.image{
		margin-top: 15px;
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
    .rowm{
    	display: flex;
    	flex-direction: column;
    }
    .row2{
    	margin-left: 0;
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
<div class="row1">
	


<?php
$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars,makers where cars.maker_id=11 and makers.maker_id=11";

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['title'];
	$year=$result['year'];

	$model=$result['model'];
	$price=$result['price'];
	
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img."\" width=150 height=100 />
	 <div class=\"red2\"> 
	 <a href=\"element6.php\">
	 <p> ".$maker." ".$model."</p></a>
	 <p> Year: ".$year." </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}

?>



</div>
</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>