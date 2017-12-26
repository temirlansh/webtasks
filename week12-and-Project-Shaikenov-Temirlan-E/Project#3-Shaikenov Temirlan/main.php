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
			background: rgba(0, 0, 0, 0);
			border: 0px solid rgba(0, 0, 0, 0.8);		
	}
	.for2{
		position: relative;
	}
	.for1{position: absolute;
		top: 0;
		display: flex;
    	flex-direction: row;
    	z-index: 100;
	}
	.i6{
		margin-left: -5px;
		width: 1355px;
	}
	.p22{
		display: none;
	}
	.p1{
			color: white;
			font-size: 48px;
			margin: 10px 0 0 50px;
	}
	.a1{
		color: white;
		font-size: 20px;
		margin: 30px 0 0 150px;

	}
	.a1:hover{
		color: white;
	}
	.a2{
		color: white;
		font-size: 20px;
		margin: 30px 0 0 400px;

	}
	.a2:hover{
		color: white;
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
		color: white;
	}
	menu{
			width: 100%;
			padding-bottom:150px;
			min-height: calc(90vh - 250px);
	}




* {box-sizing:border-box}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 110%;
  margin-top: 50px;
  margin-left: -40px;
  position: relative;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


	.photo{
		margin-left: 15px;
	}
	.mark{
		flex-direction: row;
		margin-top: 70px;
		text-align: center;
			}
	.i2{
		width: 90px;
		height: 50px;
		margin: 10px;
	}
	.i3{
		width: 60px;
		height: 50px;
		margin: 10px;
	}
	.i222{
		width: 100px;
		height: 70px;
	}
	.i223{
		width: 100px;
		height: 60px;
	}
	.i224{
		width: 60px;
	}
	.i4{
		width: 120px;
		height: 70px;
	}
	.i4:hover{
		width: 160px;
		height: 110px;
	}
	.c1{
		margin-top: 10px;
		font-size: 25px;
		display: flex;
		flex-direction: column;
	}
	.c11{
		display: flex;
		flex-direction: row;
		margin-top: 50px;
	}
	.c12{
		display: flex;
		flex-direction: row;
		margin-top: 50px;
	}
	.c1 img{
		margin-top: 20px;
		width: 200px;
	}
	.c1 a{
		margin-left: 150px;
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
	@media screen and (max-width: 1300px) {
    header{height: 100%;
    	
    	display: flex;
    	flex-direction: column;
    	width: 100%;
    	background-color: #424242;
    }

    .i6{
    	display: none;
    }
    .md{
    	position: relative;
       display: inline-block;
       color: #424242;
    }
    .md1{
    	display: none;
    position: absolute;
    min-width: 300px;
    z-index: 1;
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
    	background-color: #424242;
    	min-width: 300px;
    	min-height: 220px;
    }
    .i1{
    	display: none;
    }
    menu{
    	display: inline-block;
    	width: 100%;
    }
    .c1{
    	margin-left: -150px;
    }
    .c11{
    	display: flex;
    	flex-direction: column;
    }
    .c12{
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
<div class="for2">
<img src="main.jpg" class="i6">
	<div class="md"><p class="p22">Menu</p>
	<div class="md1"><div class="for1">
	<a href="main.php" style="text-decoration-line: none;">
	<h1 class="p1">Sport Car</h1></a>
	<a href="create.php" class="a1">Submit an advertisement</a>
	<a href="registration.php" class="a2">Registration</a>
	<img src="key.png" class="i1">
	<a href="login.php" class="a3">Log in</a></div></div></div></div>
</header>

 
<menu>
<center><h1>Gallery</h1></center>
<div class="photo">
	<img src="audi1.jpg" class="i4">
	<img src="mustang1.jpg" class="i4">
	<img src="bmw1.jpg" class="i4">
	<img src="chevrolet.jpg" class="i4">
	<img src="vorsteiner.jpg" class="i4">
	<img src="ferrari.jpg" class="i4">
	<img src="honda.jpg" class="i4">
	<img src="toyota.jpg" class="i4">
	<img src="acuransx.jpg" class="i4">
	<img src="car.jpg" class="i4">
	<img src="ferrari2.jpg" class="i4">
	<img src="ctek.jpg" class="i4">
	<img src="lamboaventador.jpg" class="i4">
	<img src="lambo2.jpg" class="i4">
	<img src="hyundai.jpg" class="i4">
	<img src="audi2.jpg" class="i4">
	<img src="lambo.jpg" class="i4">
	<img src="bmw2.jpg" class="i4">
	<img src="chevroletcopo.jpg" class="i4">
	<img src="bmw3.jpg" class="i4">
	<img src="chevroletcorvette.jpg" class="i4">
	<img src="mustang1.jpg" class="i4">
	<img src="acuransx.jpg" class="i4">
	<img src="audi2.jpg" class="i4">
	<img src="ferrari2.jpg" class="i4">
	<img src="bmw1.jpg" class="i4">
	<img src="lambo2.jpg" class="i4">
	<img src="car.jpg" class="i4">
	<img src="toyota.jpg" class="i4">
	<img src="ferrari.jpg" class="i4">
</div>





<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="sl1.jpg" style="width:100%; height:600px;">
  <div class="text">FERRARI</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="sl2.jpg" style="width:100%; height: 600px;">
  <div class="text">AUDI</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="sl3.jpg" style="width:100%;height:600px;">
  <div class="text">CHEVROLET</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); 
}
</script>



	<div class="mark">
		<img src="mustang.png" class="i2">
		<img src="audi.png" class="i2">
		<img src="ferrariicon.png" class="i222">
		<img src="toyota-icon.png" class="i223">
		<img src="Lamborghini-icon.png" class="i224">
		<img src="bmw.png" class="i3">
	</div>
	<div class="c1">
	<div class="c12">
		<a href="list.php">Audi<br/><img src="audi-png.png"></a>
		<a href="list2.php">BMW<br/><img src="bmw-png.png"></a>
		<a href="list3.php">Mustang<br/><img src="mustang-png.png"></a>
		</div><div class="c11">
		<a href="list4.php">Ferrari<br/><img src="ferrari-png.png"></a>
		<a href="list5.php">Toyota<br/><img src="toyota-png.png"></a>
		<a href="list6.php">Lamborghini<br/><img src="lamborghini-png.png"></a>
		</div>
	</div>

	<div>
		<center><h1><a href="statistics.php">Statistics</a></h1></center>
	</div>
</menu>


<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>