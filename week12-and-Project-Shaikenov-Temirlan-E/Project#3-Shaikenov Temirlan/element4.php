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
	.name1{
		display: inline-flex;
	}
	.h21{
		margin-left: 500px;
	}
	.cont{
		display: inline-flex;
	}
	.cont1{
		width: 300px;
		
	}
	.cont2{
		
	}
	.p3{
		font-size: 25px;
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
    .name1{
    	display: flex;
    	flex-direction: column;
    }
    .h21{
    	margin-left: 0;
    }
    img{
    	width: 150px;
    	height: 90px;

    }
    .cont{
    	display: flex;
    	flex-direction: column;
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
<div class="name1">
	<h2>Ferrari</h2>
	<h2 class="h21">$300,000</h2>
</div>
<br/>
<div class="cont">
	<div class="cont1">
		<p class="p3">City - Astana</p>
		  <p class="p3"> Type - Coupe </p>
		   <p class="p3">Color - Red  </p>
	</div>
	<div class="cont2">
		<img src="ferrari.jpg" width="650px" height="450px">
	</div>
</div>
</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>