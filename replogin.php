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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
  $(document).ready(function () {
    $("#showdiv1").click(function () {
       $("#newentry").show();
       $("#appointments").hide();
       $("#pdetails").hide();
    });
    $("#showdiv2").click(function () {
       $("#appointments").show();
       $("#newentry").hide();
       $("#pdetails").hide();
    });
    $("#showdiv3").click(function () {
       $("#pdetails").show();
       $("#newentry").hide();
       $("#appointments").hide();
    });
  });
 </script>

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



 <script>
 $( function() {
   $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
 } );

 function checkid(){
   alert("id checking!!");
 }

 function testSuccess(){
   var pid = document.getElementById('pid').value;
   var dateAppoint = document.getElementById('datepicker').value;
   var stat = true;
   var types = 'insert';
   //validate the date and patient id by query and pattern matching

   var date_time = get_datetime();

   if(stat){
     $.post('enter_appointment.php',{pids:pid,dateapp:dateAppoint,curdate:date_time,type:types},
     function (data) {
       alert(data);
     });
   }
 }

 function get_datetime(){
   var d = new Date();
   var time = d.toLocaleTimeString('en-US',{ hour12: false,
                                            hour: "numeric",
                                            minute: "numeric",
                                            second: "numeric"});
 var date = d.toISOString().slice(0,10);
 var all = date+" "+time;
 return all;
 }

 function viewdetails(){
   var pid = document.getElementById('pid').value;
   var dateAppoint = document.getElementById('datepicker').value;
   var types = 'getdetails';
   var date_time = get_datetime();
   $.post('enter_appointment.php',{pids:pid,type:types},
   function (data) {
     data = data + '</br>' + 'Date of appointment: ' + dateAppoint + '</br>Appointment Taken On:   ' +date_time;
     document.getElementById('details').innerHTML = data;
   });
 }

 </script>
</head>

<body>
  <div class="jumbotron text-center">
   <h1>Webconsultant</h1>
   <p>Receptionist module for patient details management</p>
   <form class="form-inline">
     <div class="container">
       <nav>
       <ul class="list-inline">
         <li><a href="javascript: void(0)" id="showdiv1">new_patient</a></li>
         <li><a href="javascript: void(0)" id="showdiv2">appointment</a></li>
         <li><a href="javascript: void(0)" id="showdiv3">patient details</a></li>
       </ul>
      </nav>
   </div>
   </form>
  </div>

  <div class="container" id="newentry" class="toggle" style="display:none">
    <h2>Please enter the patient details:</h2><br>
  <form id ="formed">
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
</div>

<div class="container" id="appointments" class="toggle" style="display:none">
<h2>Please enter the patient details:</h2><br>
<form>
  <div class="form-group">
    <label for="pateint_id">Patient id:</label>
    <input type="name" class="form-control" id="pid" placeholder="Enter patient_id..." onBlur="checkid()">
    <p id="eparname" style="color:red;"></p>
  </div>

  <div class="form-group">
    <label for="Date">Date of appointment:</label>
     <input type="text" class="form-control" placeholder="Enter patient_id..." id="datepicker">
  </div>
  <button type="button" id="viewdeatils" class="btn btn-default" onclick="viewdetails()">View details</button>
  <button type="button" id="buttons" class="btn btn-default" onclick="testSuccess()">Submit</button>
  <p id="details"> </p>
</form>
</div>

<div id="pdetails"  class="toggle" style="display:none">show the stuff3</div>
</body>

</html>
