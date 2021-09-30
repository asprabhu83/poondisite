<?php 

include('database.php');


if(isset($_POST['academic_year']) && !empty($_POST)) {

	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$designation = $_POST['designation'];
		$department  = $_POST['department'];
		$shift = $_POST['shift'];
		$academic_year = $_POST['academic_year'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$programme = $_POST['programme'];
		$class = $_POST['class'];
		$cycle_no = $_POST['cycle_no'];
		$subject_code = $_POST['subject_code'] ;
		$hour = $_POST['hour'];
		$unit = $_POST['unit'];
		$title = $_POST['title'];
		$portion_covered = $_POST['portion_covered'];


$sql = "INSERT INTO planner (name, email, designation,department,shift,academic_year,semester,year,programme,class,cycle_no,subject_code,hour,unit,title,portion_covered)
VALUES ('$name', '$email', '$designation','$department','$shift','$academic_year','$semester','$year','$programme','$class','$cycle_no','$subject_code','$hour','$unit','$title','$portion_covered')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
}

?>