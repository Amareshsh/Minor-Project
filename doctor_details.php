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
function viewdetails(){
  var aid = document.getElementById('aid').value;
  var types = 'appdetails';
  $.post('enter_appointment.php',{aids:aid,type:types},
  function (data) {
    document.getElementById('details').innerHTML = data;
  });
}

  function enter_pres(){
    var aid = document.getElementById('aid').value;
    var presc = document.getElementById('prescription').value;
    var symp  = document.getElementById('symptoms').value;
    var disorder = document.getElementById('disoders').value;
    var types = 'Prescription';
    $.post('enter_appointment.php',{aids:aid,Symptoms:symp,Prescription:presc,Disoders:disorder,type:types},
    function (data) {
      alert(data);
    });
  }
</script>
</head>
<body>
  <div class="jumbotron text-center">
   <h1>Webconsultant</h1>
   <p>Doctor checking the appointments</p>
   <form class="form-inline">
     </div>
   </form>
  </div>

  <div class="container">
  <h2>Prescription of the patient with appointment id:</h2><br>
  <form>
    <div class="form-group">
      <label for="Appointmentid">Appointment Id:</label>
      <input type="name" class="form-control" id="aid" placeholder="Enter appointment_id..." >
    </br>
    <button type="button" id="viewdeatils" class="btn btn-default" onclick="viewdetails()">View details</button>
      <p id="details" style="color:red;"></p>
    </div>

    <div class="form-group">
     <label for="comment">Symptoms:</label>
     <textarea class="form-control" rows="4" id="symptoms"></textarea>
   </div>
   <div class="form-group">
    <label for="comment">Prescription:</label>
    <textarea class="form-control" rows="3" id="prescription"></textarea>
  </div>
  <div class="form-group">
   <label for="comment">Disorders:</label>
   <textarea class="form-control" rows="2" id="disoders"></textarea>
 </div>
    <button type="button" id="buttons" class="btn btn-default" onclick="enter_pres()">Submit</button>
    <p id="details"> </p>
  </form>
  </body>
  </html>
