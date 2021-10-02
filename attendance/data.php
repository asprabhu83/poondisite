<?php 

include('database.php');


if(isset($_POST['academic_year']) && !empty($_POST)) {

	
		$staffid = $_POST['staffid'];
		$academic_year = $_POST['academic_year'];
		$semester = $_POST['semester'];
		$date = $_POST['date'];
		$hour = $_POST['hour'];
		$subject_code = $_POST['subject_code'] ;
		
		$shift = $_POST['shift'];
		$year = $_POST['year'];
		$programme = $_POST['programme'];
		$department  = $_POST['department'];

$sql = "INSERT INTO planner (staffid, academic_year, semester,date, hour, subjec_code, shift, year, programme,department)
VALUES ('$staffid', '$academic_year', '$semester','$date','$hour','$subject_code','$shift','$year','$programme','$department')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
}

?>