<?php
session_start();

include('config.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

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
  user-select: none;
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

















/*FRONT STYLE*/
.p1 {
  font-family: "Brush Script MT", Lucida Handwriting, Cursive;
}




* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #FFFF66;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color:  #bfff00;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}




/*about us*/
.aside {
  background-color:  #ddffcc;
  padding: 5px;
  color:   #0033cc;
  text-align: center;
  font-size: 10px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}


.aside1 {
  background-color:  #ffcc00;
  padding: 5px;
  color:   #000000;
  text-align: center;
  font-size: 10px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.col-4 {
    width: 25%;
    float: left;
}
.col-4 img{
    width: 100%;
}
.col-4 {
    width: 21%;
    float: left;
    margin: 20px;
    /* border: 2px solid; */
    box-shadow: 0 0 15px #525252;
    text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1 class="p1">SPORTS E-COMMERCE SHOP</h1>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="http://localhost/WT/SPORTS_ECOMERCE_FINAL/accosories.html">Catagories</a>
  <a href="#">All Shops</a>
  <a href="http://localhost/WT/SPORTS_ECOMERCE_FINAL/campign.html">Campaign</a>
  <a href="#">All Products</a>
  <a href="#">Brands</a>
  <a href="#">Gift Cards</a>
  <?php if(isset($_SESSION["userid"])){ 
    ?>
  <a href="account.php">Customer Accounts</a>
  <a href="logout.php">Logout</a>
  <?php } else{ ?>
  <a href="login.php">login</a>
  <a href="register.php">Register</a>


  <?php } ?>
  <a href="http://localhost/WT/SPORTS_ECOMERCE_FINAL/chat.html">Chat</a>
</div>

<br>


<input type="text" name="search" onchange="datasearch()" id="name">
<div class="show"></div>




<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="sportsmodel/model3.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="sportsmodel/model5.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="sportsmodel/model1.jpg" style="width:100%">
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

<script>
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

function datasearch(){


    $.ajax({
    url: 'data_search.php?name='+$('#name').val(),
    type: 'GET',
    dataType: 'json',

    success: function(json) {

      alert(json);

    }
  });

        // // process the form
        // $.ajax({
        //     type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        //     url         : 'data_search.php?name='+$('#name').val(), // the url where we want to POST
        //     dataType    : 'json', // what type of data do we expect back from the server
        //                 encode          : true
        // })
        //     // using the done promise callback
        //     .done(function(data) {

        //         // log data to the console so we can see
        //         alert(data);

        //         // here we will handle errors and validation messages
        //     });
}
</script>
<br>

<div class="aside1" >
 <h2 class="title">Featured Products</h2></div>
 <div class="row">
  <div class="col-4">
    <img src="pic/p1.jpg">
    <h4>Playstation 5</h4>
    <div class="rating">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      
    </div>
    <p>25000 Taka</p>
    
  </div>
   <div class="col-4">
    <img src="pic/p2.jpg">
    <h4>Juventus Jersey</h4>
    <div class="rating">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      
      
    </div>
    <p>800 Taka</p>
    
  </div>
   <div class="col-4">
    <img src="pic/p3.jpg">
    <h4>Special Uno Set</h4>
    <div class="rating">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      
      
    </div>
    <p>500 Taka</p>
    
  </div>
   <div class="col-4">
    <img src="pic/p4.jpg">
    <h4>Cricket Training Set</h4>
    <div class="rating">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      
      
    </div>
    <p>12000 Taka</p>
    
  </div>


</div>
</div>




<br>






<div class="aside">
      <h2>About Us</h2>
      <p>SPORTS E-COMMERCE is the largest sports shopping destination in Bangladesh. Launched in 2020, the online store offers the widest range of sports products in categories ranging from latest sports accessories.

         SPORTS E-COMMERCE believes in “Delivering Happiness” with an excellent customer experience thus provides the most efficient delivery service through own logistics so that customers get a hassle-free product delivery at their doorstep. We help our local and international vendors as well as a lot of brands serving thousands of consumers from all over Bangladesh. We also offer free returns and various payment methods including Cash on delivery, Online Payments, Card on delivery and bKash with all of our products.
      </P>
      
    </div>


</body>
</html>


