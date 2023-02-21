<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
<div class="section-height-800 breadcrumb-geography context-dark text-center">
    <div class="shell section-bottom-30">
        <div class="veil reveal-md-block">
            <h1 class="text-bold">FACULTY FEEDBACK ON CURRICULUM  </h1>
        </div>
        <ul class="list-inline list-inline-with-arrows p">
            <ul class="list-inline list-inline-with-arrows p">
                <li><a href="<?php echo base_url() ?>" class="text-white">Home </a></li>
                <li>Faculty Feedback on Curriculum</li>
            </ul>
        </ul>
    </div>
</div>

<?php
include('database_connection.php');
?>

<?php

if (isset($_POST['roll_no'])) { // Fetching variables of the form which travels in URL
    $staffid = $_POST['roll_no'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $aos = $_POST['commentText'];

    if (!empty($staffid)) {
        //Insert Query of SQL
        $sql = "INSERT INTO `facultyfeedbackresponse`(`staffid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `aos`) VALUES ('$staffid','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$aos')";

        if ($conn->query($sql) === TRUE) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Curriculum Faculty Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <section id="content">

            <h1>Feedback Form</h1>
            <div>
              <h3>  Thanks for your valuable feedback!</h3>
            </div>

            <div>
             <a href="login_form">Go Home </a>
            </div>

        </section><!-- content -->
    </div><!-- container -->
</body>

</html>



<?php } else {

            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }
    } else {
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
$conn->close(); // Closing Connection with Server
?>



<?php
// if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
// $name = $_POST['name'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $address = $_POST['address'];
// if($name !=''||$email !=''){
// //Insert Query of SQL
// $query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
// echo "<br/><br/><span>Data Inserted successfully...!!</span>";
// }
// else{
// echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
// }
// }
// mysql_close($connection); // Closing Connection with Server
// 
?>