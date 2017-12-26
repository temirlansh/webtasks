<!DOCTYPE html>
<html>
<head>
	<title>Sport Car</title>
	<style>
	body{
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
		position: fixed;
		bottom: 0px;
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
    .a1{
    	margin: 10px 0 0 50px;
    }
    .a2{
    	margin: 10px 0 0 50px;
    }
    .a3{
    	margin: 10px 0 0 50px;
    }
    menu{
    	display: inline-block;
    	width: 100%;
    }
    .item{
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
	<a href="main.html" style="text-decoration-line: none;"><h1 class="p1">Sport Car</h1></a>
	<a href="create.html" class="a1">Submit an advertisement</a>
	<a href="registration.html" class="a2">Registration</a>
	<img src="key.png" class="i1">
	<a href="login.html" class="a3">Log in</a>
</header>

 
<menu>
<div class="rowm">
	<div class="row1">
		<div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>

  <div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>

  <div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>
	</div>

	<div class="row2">
		<div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>

  <div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>

  <div class="item">
  <img src="audi1.jpg" class="image" width="150px" height="100px"/>
  <div class="main_body">
    <div class="title">
      <a href="element2.html" style=" margin-left: 15px;"><h3>Audi R8 V10 plus</h3></a>
      <span class="text_for" style=" margin-left: 15px; margin-top: 20px;"><strong>for</strong></span>
      <span class="price" style=" margin-left: 15px; margin-top: 20px;">$350,000</span>
      </div>
  <p style="margin-top: -10px; margin-left: 10px;"><strong> Good car in good conditions</strong></p>
      <p style=" margin-top: -10px; margin-left: 10px;">City: <span class="city"><strong>Astana</strong></span>, Type: Coupe</p>
  </div>
  </div>
	</div>

</div>
</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>