<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MOVIES</title>
	<link rel="stylesheet" href="style.css"> 
	


</head>

<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="pandeyji.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="war.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="tom.jpg" style="width:100%">
 
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="spidy.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="snow.jpg" style="width:100%">
  
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
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
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

	<center> <h1>MOVIES COLLECTIONS</h1></center>
	<header>
		<img src ="logo.jpg" height="310px" width="400px">

		</header>
		<div class="photo"><img src="banner.png"></div>
	
		<div >
			<a href="#" class ="content">
	
			<img src="movie.jpg" height="400px" width="400px";><img src="avengers.jpg" height="400px" width="400px";>
			<img src="tiger.jpg" height="400px" width="400px";>
		</a>
			
			
		</div>

	
	<div class="banner">
	<h2>
				CLICK ANY LINK TO DOWNLOAD YOUR FAVOURITE MOVIES
			</h2>
			</div>
		//link decoration
			<div class="link">
				
</a>
				
	<?php

	$handle=curl_init();
	$url="http://robots.stanford.edu/movies/";
	curl_setopt($handle,CURLOPT_URL,$url);
	curl_setopt($handle,CURLOPT_POST,false);
	curl_setopt($handle,CURLOPT_RETURNTRANSFER,true);

	$output =curl_exec($handle);

	curl_close($handle);

	//echo $output;
	$dom= new DOMDocument();

	$dom->loadHTML($output);

	$element=$dom->getElementsByTagName('a');

	for ($i=0; $i < $element->length; $i++) {
	
echo "<a href='".$url.$element->item($i)->nodeValue."'>".$element->item($i)->nodeValue."</a><br>";
}

		
	



	?>
</div>
<div class="footer">
	
	
	<img src="ap.jpg"  height="20px" width="20"><PRE><B>SNATCHER #AP</B></PRE>
</div>


	
</body>
</html>

