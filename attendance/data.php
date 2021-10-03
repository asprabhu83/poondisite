<?php 

include('database.php');


if(isset($_POST['academic_year']) && !empty($_POST)) {
	date_default_timezone_set('Asia/Kolkata');
		$staffid = $_POST['staffid'];
		$academic_year = $_POST['academic_year'];
		$semester = $_POST['semester'];
				$date_insert = strtr($_POST['date1'],'/','-');
				$time = date("h:i:s", strtotime("now"));
		$date1 = date('Y-m-d H:i:s',strtotime($date_insert.' '.$time));
		$hour = $_POST['hour'];
		$sub_code = $_POST['sub_code'] ;
		$shift = $_POST['shift'];
		$year = $_POST['year'];
		$programme = $_POST['programme'];
		$class  = $_POST['class'];
		$section  = $_POST['section'];
		//echo'<pre>'; print_r($date1); exit;
$sql = "INSERT INTO attendance (staffid, academic_year, semester,date1, hour, sub_code, shift, year, programme,class,section)
VALUES ('$staffid', '$academic_year', '$semester','$date1','$hour','$sub_code','$shift','$year','$programme','$class','$section')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
}

?>