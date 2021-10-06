<?php
include('database.php');
echo'<pre>';print_r($_POST); exit;
select rollno from paid_rolllist where year=$year and programme =$ programme and class = $class and section = $section

$sql = "SELECT rollno FROM paid_rolllist where year ='".$year."'" programme ='".$programme."'" class ='".$class."'";
// $sql = "SELECT a.*,b.* FROM `master` a LEFT JOIN net_mark b on a.rollno = b.rollno WHERE b.rollno = '".$_POST["rollno1"]."'"."AND a.dob = '".$dob."'";
// $sql = "SELECT id,rollno,subcode,imark,emark,total,result,B.NAME FROM net_mark A, `master` B where A.rollno = B.rollno AND A.rollno ='".$roll."'";
$result = $conn->query($sql);

if (isset($result->num_rows) && $result->num_rows > 0) { ?>
   
   <?php if(isset( $_POST["rollno1"]) && isset( $_POST["dob"])) {  ?>




?>