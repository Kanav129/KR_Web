<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		ul{
			background-color: rgb(258,258,258, 0);
		}
		h4{
			background-color: rgb(0,0,0, 0);
		}
		li{
			background-color: rgb(0,0,0, 0);
		}
		
		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
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

		.active1 {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .8} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .8} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}
	</style>
</head>

<body>
	<h1>Trade Shows</h1>
	<div class="container">
		<p>Please visit us...<br></p>
		<p style="text-align: center;">
At the Hong Kong International Diamond, Gem and Pearl Show being held at AsiaWorld-Expo on 27 February ~ 3 March 2018. We are looking forward to attend you at our Booth # AWE Hall 7 ~ A11, under name of KANAY ROCKS LTD.
<br><br>
For further information about the show kindly visit the
<a href="http://m.hktdc.com/fair/hkdgp-en/HKTDC-Hong-Kong-International-Diamond--Gem---Pearl-Show.html">HKTDC website</a>
<br><br>
	At the Hong Kong International Jewelry Manufacturers' Show (JMA Hong Kong) being held at Hong Kong Convention and Exhibition Centre, Wanchai on 30 November ~ 3 December 2017. We are looking forward to attend you at our Booth # 1E ~ A39, under name of KANAY ROCKS LTD.
 
For further information about the show kindly visit 
		<a href="http://www.jewelryshows.org/en/">Jewelry Shows</a>

</p>
		
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="../images/trade1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="../images/trade2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="../images/trade3.jpg" style="width:100%">
</div>
	
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="../images/trade4.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
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
    dots[i].className = dots[i].className.replace(" active1", ""); //highlights the dot with corresponding active image
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active1";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
	</body>
</html>