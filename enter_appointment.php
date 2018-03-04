<?php
$user = "root";
$pass = "";
$db = "webconsultant";
$newdb = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect sql");

$type = $_POST['type'];

// if the post is of getting appointment with doctor
if($type == "insert"){
  $pid = $_POST['pids'];
  $dateapp = $_POST['dateapp'];
  $date_taken = $_POST['curdate'];
  $query = "INSERT INTO `appointment_details`(`p_id`, `appt_date`, `taken_date`)
   VALUES ('$pid','$dateapp','$date_taken');";

   $query = mysqli_query($newdb,$query);
   echo "Successfully entered!!";
}

// if the post is of getting patient details
elseif ($type == "getdetails") {
  $pid = $_POST['pids'];
  $query = "SELECT * FROM patient_entry WHERE p_id = '$pid'";
  $result = mysqli_query($newdb,$query);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo "Patient Name: " . $row["fullname"]. "</br>"."Patient Id: " . $row["p_id"].
      "</br>"."Age: " . $row["age"]."</br>"."Gender: " . $row["gender"].
      "</br>"."District: " . $row["district"]."</br>"."Occupation: " . $row["occupation"].
      "</br>"."Phone no: " . $row["phone_no"];
    }
  }else{
    echo "error";
  }
}

//if the post is of getting the appointment details for doctor_details
elseif ($type == "appdetails") {
  $aid = $_POST['aids'];
  $query = "SELECT * FROM appointment_details WHERE a_id = '$aid'";;
  $result = mysqli_query($newdb,$query);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo "Patient_Id: " . $row["p_id"]. "</br>"."Appointment Id: " . $row["a_id"]. "</br>"
      ."Appointment Date " . $row["appt_date"]. "</br>"."Appointment On: " . $row["taken_date"]. "</br>";
    }
  }else{
    echo "error";
  }
}

//if the doctor enters the Prescription then to Store
elseif ($type == "Prescription") {
  $aid = $_POST['aids'];
  $presc = $_POST['Prescription'];
  $symp = $_POST['Symptoms'];
  $disorder = $_POST['Disoders'];
  //need to change
  $query = "INSERT INTO `prescription_details`(`a_id`, `prescription`, `symptoms`, `disorder`)
  VALUES ('$aid','$presc','$symp','$disorder');";
  $result = mysqli_query($newdb,$query);
  if($result)
  {
    echo "Prescription details for Aid: $aid entered Successfully!!";
  }else{
    echo "failed!!!";
  }

}

elseif($type == 'enter'){
  $fname = $_POST['fname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $occupation = $_POST['occup'];
  $place = $_POST['place'];
  $phone = $_POST['phone'];

  $query = "INSERT INTO patient_entry (fullname, age, gender, district, occupation, phone_no)
  VALUES ('$fname','$age','$gender','$place','$occupation','$phone');";

  if ($newdb->query($query) === TRUE) {
    $last_id = $newdb->insert_id;
    echo "New patient details created successfully. Patient ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $newdb->error;
}
}






?>
