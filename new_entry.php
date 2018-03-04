<!--php core logic handling the sql database at the localhost-->

<?php
$message = "testting fine";

function helloworld()
{
  global $message;
  echo $message;
}

function add($a,$b){
  $c=$a+$b;
  return $c;
}

function add2($a){
  echo $a;
}
 ?>

<!-- HTML website design components -->

<html>

<head>

<title>Webconstant Prototype</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
   padding: 20px 25px;
}

.container-fluid {
   padding: 60px 50px;
}
</style>

 <script>

 function testempty(){

   var fstat = true;
   var fName = document.getElementById('fname').value;
   var aAge = document.getElementById('age').value;
   var gGender = getgender();
   var pPlace = document.getElementById('place').value;
   var oOccup = document.getElementById('occupation').value;
   var cType = "enter";
   var pPhone = document.getElementById('phonesd').value;

   if(!isNaN(fName))
   {
     alert("Enter name correctly");
     fstat = false;
   }
   if(aAge<1 || aAge>150)
   {
     alert("Enter age correctly in range of 1-150");
     fstat = false;
   }
   if(!isNaN(gGender))
   {
     alert("Select any one gender");
     fstat = false;
   }
   if(!isNaN(oOccup))
   {
     alert("Enter occupation if none enter as none");
     fstat = false;
   }
   if(!isNaN(pPlace))
   {
     alert("Enter place");
     fstat = false;
   }

   if(fstat){
     $.post('enter_appointment.php',{fname:fName,age:aAge,gender:gGender,occup:oOccup,place:pPlace,type:cType,phone:pPhone},
     function (data) {
       alert(data);
     });
   }

 }

 function query(){
   var ids = document.getElementById('searchs').value;
   var cType = 'query';
   if(isNaN(ids))
   {
     $.post('validate.php',{type:cType,pid:ids},
     function (data) {
       alert(data);
     })
     alert("hello");
   }

 }

 function checkname(){
   var dname = document.getElementById('fname').value;
   if(dname=="")
   {
     document.getElementById('eparname').innerHTML = '--name should not be blank.';
   }else {
     document.getElementById('eparname').innerHTML = '';
   }
 }

 function checkage(){
   var dage = document.getElementById('age').value;
   if(!(dage>0 && dage<150))
   {
     document.getElementById('eparage').innerHTML = '--age should be in range 0 to 150.';
   }else {
     document.getElementById('eparage').innerHTML = '';
   }
 }

 function getgender(){
   var gValue;
   if(document.getElementById('gmale').checked)
   {
     gValue = "Male";
   }else if (document.getElementById('gfemale').checked) {
     gValue = "Female"
   }else if (document.getElementById('gmale').checked) {
     gValue = "Others";
   }else {
     return null;
   }
   return gValue;
 }
 </script>

</head>

<body>
  <div class="jumbotron text-center">
   <h1>Webconsultant</h1>
   <p>Receptionist new patient details entry</p>
   <form class="form-inline">
     </div>
   </form>
  </div>

  <div class="container">
  <h2>Please enter the patient details:</h2><br>
  <form>
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="name" class="form-control" id="fname" placeholder="Enter Name..." onBlur="checkname()">
      <p id="eparname" style="color:red;"></p>
    </div>

    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Age..." onBlur="checkage()">
      <p id="eparage" style="color:red;"></p>
    </div>

    <label for="gender">Gender:
    <div class="radio">
    <label class="radio-inline">
      <input type="radio" id="gmale" name="optradio">Male
    </label>
    <label class="radio-inline">
      <input type="radio" id="gfemale" name="optradio">Female
    </label>
    <label class="radio-inline">
      <input type="radio" id="gothers" name="optradio">Others
    </label>
    </div>
    </label>

    <div class="form-group">
      <label for="place">Place:</label>
      <input type="name" class="form-control" id="place" placeholder="Enter Place...">
    </div>

    <div class="form-group">
      <label for="place">Occupation:</label>
      <input type="name" class="form-control" id="occupation" placeholder="Enter Occupation...">
    </div>

    <div class="form-group">
      <label for="phone">Phone no:</label>
      <input type="name" class="form-control" id="phonesd" placeholder="Enter Phone Number...">
    </div>

    <button type="button" id="buttons" class="btn btn-default" onclick="testempty()">Submit</button>
  </form>

</body>
 </html>
