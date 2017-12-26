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
			min-height: calc(90vh - 200px);
	}




#cards .card{
        border:1px solid red;
        display:flex;
        width:300px;
      }
      #cards .card .title{
        flex-grow: 1;
      }
      #cards .card .price{
        font-weight: bold;
        padding-right: 20px;
      }
      #loading{
        display: none;
      }
      #cards{
        width:300px;
        height:200px;
        border: 1px solid blue;
      }







* {box-sizing:border-box}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="sl3.jpg" style="width:100%; height:600px;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="sl2.jpg" style="width:100%; height:600px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="sl1.jpg" style="width:100%; height:600px;">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script defer>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



























<button>Load</button>
    <div>
      <button id="sortByMaker">Sort by maker</button>
      <button id="sortByPrice">Sort by price</button>
    </div>
    <div id="cards">
      <img width="300px" height="200px" id="loading" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif"/>
    </div>


    <script defer>
    var toSort = 0;
    function process(responses){
      if(toSort==1){
        responses.sort((a,b) => a.maker.localeCompare(b.maker));
        toSort=-1;
      }
      else if (toSort==2) {
        responses.sort((a,b) => a.price - b.price);
        toSort=-1;
      }
      for (let response of responses){
        const greeting = document.querySelector("#cards");
        let newEl = document.createElement("div");
        newEl.classList.add("card");
        let newElmaker = document.createElement("div");
        let newElmodel = document.createElement("div");
        let newElprice = document.createElement("div");
        let maker = response.maker + " " + response.model;
        newElmaker.textContent = maker;
        newElmaker.classList.add("title");
        var price = response.price;
        newElprice.textContent = price;
        newElprice.classList.add("price");
        newEl.appendChild(newElmaker);
        newEl.appendChild(newElprice);
        greeting.appendChild(newEl);
      }
    }
    function work(){
      toSort = -1;
        var btn = document.querySelector('button');
        document.getElementById('loading').style.display = 'block';
        btn.innerHTML = 'Loading...';
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
            call();
            btn.innerHTML = 'Items are loaded';
          }, 1000
        );
    }
    function sortByMaker(){
      if(toSort == -1){
        toSort = 1;
        document.querySelector("#cards").innerHTML = '';
        call();
      }
    }
    function sortByPrice(){
      if(toSort == -1){
        toSort = 2;
        document.querySelector("#cards").innerHTML = '';
        call();
      }
    }
    function toText(responce){
      return responce.json().then(process);
    }
    function call(){
      fetch("http://demo3045350.mockable.io/SportCars").then(toText);
    }
    document.querySelector("button").addEventListener("click", work);
    document.querySelector("#sortByMaker").addEventListener("click", sortByMaker);
    document.querySelector("#sortByPrice").addEventListener("click", sortByPrice);
    </script>
</menu>



<footer>
<p class="p2">© 2017 Sport Car</p>
</footer>
</body>
</html>

