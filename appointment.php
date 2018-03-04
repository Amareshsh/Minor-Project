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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
   <p>Receptionist new patient details entry</p>
   <form class="form-inline">
     </div>
   </form>
  </div>
  <div class="container">
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

  </body>
  </html>
