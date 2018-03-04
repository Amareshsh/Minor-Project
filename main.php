<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webconsultant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
.jumbotron {
    background-color: #f4511e; /* Orange */
    color: #ffffff;
}

</style>
<style>
.bg-grey {
    background-color: #f6f6f6;
}
</style>
<style>
.jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 60px 25px;
}

.container-fluid {
    padding: 60px 50px;
}
</style>

<style>
.logo {
    font-size: 200px;
}
@media screen and (max-width: 768px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
}

.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
}

.thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
}

.carousel-indicators li {
    border-color: #f4511e;
}

.carousel-indicators li.active {
    background-color: #f4511e;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}

.navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
}

h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
}
.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide;
    /* The duration of the animation */
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible;
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        transform: translateY(70%);
    }
    100% {
        opacity: 1;
        transform: translateY(0%);
    }
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.containers {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<script>
function logindoc() {
  alert("this is doctor");
}

function loginpat(){
  alert("this is patient");
}
function loginrec(){
  alert("this is receptionist");
}

function testapp(){
 var userField = document.getElementById('userField').value;
 var passField = document.getElementById('passField').value;

 if(!isNaN(userField) && !isNaN(passField)){
   alert("enter the Username!!");
 }else{
   if(userField == 'doctor'){
     window.location.replace("http://localhost/webproject/doctor_details.php");
   }else{
     window.location.replace("http://localhost/webproject/replogin.php");
   }

   }
 }
</script>



</head>
<body>


<div class="jumbotron text-center">
 <h1>Webconsultant</h1>
 <p>Automatic process of patient details entry</p>
 <form class="form-inline">
   <div class="input-group">
     <input type="email" class="form-control" size="50" placeholder="Email Address" required>
     <div class="input-group-btn">
       <button type="button" class="btn btn-danger">Subscribe</button>
     </div>
   </div>
 </form>
</div>




<div class="container-fluid text-center bg-grey" id="login">
  <h2>Login</h2>
  <h4>Choose the roll to login:</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="doctor.jpg" alt="Doctor" onclick="document.getElementById('id01').style.display='block'">
        <p><strong>Doctor</strong></p>
        <p>Psychiatry</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="receptionist.jpg" alt="Receptionist" onclick="document.getElementById('id01').style.display='block'">
        <p><strong>Receptionist</strong></p>
        <p>Enroll patient details</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="patient.jpg" alt="Patient" onclick="document.getElementById('id01').style.display='block'">
        <p><strong>Patient</strong></p>
        <p>Person suffering from disorder</p>
      </div>
    </div>
</div>

<h2>What our patients say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
 </ol>

 <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
   <div class="item active">
   <h4>"Good doctor of physicology!!"<br><span style="font-style:normal;">Patient1</span></h4>
   </div>
   <div class="item">
     <h4>"helped me a lot!!"<br><span style="font-style:normal;">Patient2</span></h4>
   </div>
   <div class="item">
     <h4>"hey good"<br><span style="font-style:normal;">Patient3</span></h4>
   </div>
 </div>

 <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>

<div class="container-fluid bg-grey" id="contact">
 <h2 class="text-center">CONTACT</h2>
 <div class="row">
   <div class="col-sm-5">
     <p>Consulting Psychiatrist
Michigan Compound</p>
     <p><span class="glyphicon glyphicon-map-marker"></span> Saptapur, Dharwad-580001</p>
     <p><span class="glyphicon glyphicon-phone"></span> 0836-2776158, 2776158 </p>
     <p><span class="glyphicon glyphicon-envelope"></span> drpandurangi@yahoo.com</p>
   </div>
   <div class="col-sm-7">
     <div class="row">
       <div class="col-sm-6 form-group">
         <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
       </div>
       <div class="col-sm-6 form-group">
         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
       </div>
     </div>
     <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
     <div class="row">
       <div class="col-sm-12 form-group">
         <button class="btn btn-default pull-right" type="submit">Send</button>
       </div>
     </div>
   </div>
 </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#">Physicology</a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#about">ABOUT US</a></li>
       <li><a href="#login">LOGIN</a></li>
       <li><a href="#contact">CONTACT</a></li>
       <li><a href="#googleMap">LOCATION</a></li>
     </ul>
   </div>
 </div>
</nav>

<div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="containers">
      <label for="uname"><b>Username</b></label>
      <input type="text" id="userField" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" id="passField" placeholder="Enter Password" name="psw" required>

      <button type="button" id="submitField" onclick="testapp()">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="containers" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>
