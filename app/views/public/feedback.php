<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>

<?php
include('database_connection.php');
$roll_no =  isset($_POST["roll_no"]) ? $_POST["roll_no"] : '';

if (!empty($roll_no)) {

  $get_dob = str_replace('/', '-', $_POST['dob']);

  $dob = date("Y-m-d", strtotime($get_dob));

  $sql = "SELECT rollno,dob FROM master WHERE rollno ='" . $roll_no . "' AND dob = '" . $dob . "'";

  $sql2 = "SELECT regno FROM `feedbackresponse` WHERE regno ='" . $roll_no . "'";

  $result = $conn->query($sql);
  if (isset($result->num_rows) && $result->num_rows <= 0) {

    echo "<br><br><h1><br>Roll Number Not found!<h1>";
    exit;
  }

  $check_alreadySubmitted = $conn->query($sql2);

  if (isset($check_alreadySubmitted->num_rows) && $check_alreadySubmitted->num_rows > 0) {

    
    echo "<br><br><h1> You are already submitted!</h1>";
    exit;
  }

}

?>

<div class="section-height-800 breadcrumb-geography context-dark text-center">
    <div class="shell section-bottom-30">
        <div class="veil reveal-md-block">
            <h1 class="text-bold">STUDENT FEEDBACK ON CURRICULUM  </h1>
        </div>
        <ul class="list-inline list-inline-with-arrows p">
            <ul class="list-inline list-inline-with-arrows p">
                <li><a href="<?php echo base_url() ?>" class="text-white">Home </a></li>
                <li>Student Feedback on Curriculum</li>
            </ul>
        </ul>
    </div>
</div>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Feedback Form on Curriculum </title>

  <meta name="author" content="AvvmFeedbackForm" />

  <link rel="stylesheet" href="css/style.css">
  <!--Only for demo purpose - no need to add.-->
  <link rel="stylesheet" href="css/demo.css" />

  
</head>

<body>

<!-- <h1 style="background-color:DodgerBlue;">Hello World</h1> -->
  <header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading">
          <h1>Feedback Form </h1>
        </div>
      </div>
    </div>
  </header>



  <main class="syllabus_2017">
    <div class="container">
        <!-- <div class="heading">Feedback Form</div> -->
        <div class="table_contents" style="overflow-x:auto;">
          
        <div class="feedback">
            <p><b>Dear Student,</b><br>
            Your feedback will be useful for revision, restructuring and quality improvement of the curriculum</p>

            <h4>Kindly tick the appropriate box based on your opinion </h4>
          <form name="feedback_form" method="POST" action="feedback_form">

          <input type="hidden" name="roll_no" value="<?php echo $roll_no; ?>">

          <table>
                <thead>
                  <tr>
                        <th>S.No</th>
                        <th>Question</th>
                        <th>Strongly Agree(5*)</th>
                        <th>Agree(4*)</th>
                        <th>Neutral(3*)</th>
                        <th>Disagree(2*)</th>
                        <th>Strongly Disagree(1*)</th>                        
                   </tr>                                      
                </thead>                
                <tbody>                   
                <tr>
                        <td>1.</td>
                        <td>Curriculum is suitable to the programme</td>
						            <span class="star-rating">
                            <td><input type="radio" name="q1" value="1"><i></i></td>
                            <td><input type="radio" name="q1" value="2"><i></i></td>
                            <td><input type="radio" name="q1" value="3"><i></i></td>
                            <td><input type="radio" name="q1" value="4"><i></i></td>
                            <td><input type="radio" name="q1" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>2.</td>
                        <td>Curriculum is need based</td>
						            <span class="star-rating">
                            <td><input type="radio" name="q2" value="1"><i></i></td>
                            <td><input type="radio" name="q2" value="2"><i></i></td>
                            <td><input type="radio" name="q2" value="3"><i></i></td>
                            <td><input type="radio" name="q2" value="4"><i></i></td>
                            <td><input type="radio" name="q2" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>3.</td>
                        <td>Learning  values (concepts, knowledge and analytical abilities)</td>
						            <span class="star-rating">
                            <td><input type="radio" name="q3" value="1"><i></i></td>
                            <td><input type="radio" name="q3" value="2"><i></i></td>
                            <td><input type="radio" name="q3" value="3"><i></i></td>
                            <td><input type="radio" name="q3" value="4"><i></i></td>
                            <td><input type="radio" name="q3" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                   <tr>
                        <td>4.</td>
                        <td>Aims and objectives of the curriculum are well defined and clear </td>
						            <span class="star-rating">
                            <td><input type="radio" name="q4" value="1"><i></i></td>
                            <td><input type="radio" name="q4" value="2"><i></i></td>
                            <td><input type="radio" name="q4" value="3"><i></i></td>
                            <td><input type="radio" name="q4" value="4"><i></i></td>
                            <td><input type="radio" name="q4" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>5.</td>
                        <td>Curriculum content is followed by corresponding text books & reference materials.</td>
						            <span class="star-rating">
                            <td><input type="radio" name="q5" value="1"><i></i></td>
                            <td><input type="radio" name="q5" value="2"><i></i></td>
                            <td><input type="radio" name="q5" value="3"><i></i></td>
                            <td><input type="radio" name="q5" value="4"><i></i></td>
                            <td><input type="radio" name="q5" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>6.</td>
                        <td>Sufficient number of prescribed books are available in the library </td>
						            <span class="star-rating">
                            <td><input type="radio" name="q6" value="1"><i></i></td>
                            <td><input type="radio" name="q6" value="2"><i></i></td>
                            <td><input type="radio" name="q6" value="3"><i></i></td>
                            <td><input type="radio" name="q6" value="4"><i></i></td>
                            <td><input type="radio" name="q6" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>7.</td>
                        <td>Interest has been made by the curriculum in the relevant area </td>
						            <span class="star-rating">
                            <td><input type="radio" name="q7" value="1"><i></i></td>
                            <td><input type="radio" name="q7" value="2"><i></i></td>
                            <td><input type="radio" name="q7" value="3"><i></i></td>
                            <td><input type="radio" name="q7" value="4"><i></i></td>
                            <td><input type="radio" name="q7" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>8.</td>
                        <td>The curriculum improves my knowledge in the subject area </td>
						            <span class="star-rating">
                            <td><input type="radio" name="q8" value="1"><i></i></td>
                            <td><input type="radio" name="q8" value="2"><i></i></td>
                            <td><input type="radio" name="q8" value="3"><i></i></td>
                            <td><input type="radio" name="q8" value="4"><i></i></td>
                            <td><input type="radio" name="q8" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>9.</td>
                        <td>Course outcomes are well defined and clear</td>
						            <span class="star-rating">
                            <td><input type="radio" name="q9" value="1"><i></i></td>
                            <td><input type="radio" name="q9" value="2"><i></i></td>
                            <td><input type="radio" name="q9" value="3"><i></i></td>
                            <td><input type="radio" name="q9" value="4"><i></i></td>
                            <td><input type="radio" name="q9" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    <tr>
                        <td>10.</td>
                        <td>Curriculum is job/skill oriented </td>
						            <span class="star-rating">
                            <td><input type="radio" name="q10" value="1"><i></i></td>
                            <td><input type="radio" name="q10" value="2"><i></i></td>
                            <td><input type="radio" name="q102" value="3"><i></i></td>
                            <td><input type="radio" name="q10" value="4"><i></i></td>
                            <td><input type="radio" name="q10" value="5"><i></i></td>
                            </span>

                        <div class="clear"></div>
                        <hr class="survey-hr"></td>                        
                    </tr>

                    </tbody>
            </table>
        
                 
                    <label for="m_3189847521540640526commentText">11. Any Other suggestions:</label><br /><br />
                    <textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
                     <br>
                     <div class="clear"></div>
              <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your Feedback">&nbsp;
             
            </form>
            </div>             
          </div>
    </div>
</main>

</body>
</html>

<?php
init_public_tail();
?>

  <!-- <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent"> -->


          <!-- <div class="feedback">
            <p><b>Dear Student,</b><br>
              Your feedback will be useful for revision, restructuring and quality improvement of the curriculum</p>

            <h4>Strongly Agree(5*) - Agree(4*) - Neutral(3*) - Disagree(2*) - Strongly Disagree(1*)</h4>

            <h4>Kindly Give your rating for the following feedback </h4>     -->
            <!-- <?php  ?>

            <form name="feedback_form" method="POST" action="feedback_form">

              <input type="hidden" name="roll_no" value="<?php echo $roll_no; ?>"> -->

            
                   <!-- <label>1. Curriculum is suitable to the programme</label><br> -->

              <!-- <span>
                <input type="radio" name="q1" value="1"><i><label>  Strongly Agree(5)</label><br></i>
                <input type="radio" name="q1" value="2"><i><label>  Agree(4)</label><br></i>
                <input type="radio" name="q1" value="3"><i><label>  Neutral(3)</label><br></i>
                <input type="radio" name="q1" value="4"><i><label>  Disagree(2)</label><br></i>
                <input type="radio" name="q1" value="5"><i><label>  Strongly Disagree(1)</label><br></i>
              </span> -->
              
           <!-- <span class="star-rating">
                <input type="radio" name="q1" value="1"><i></i>
                <input type="radio" name="q1" value="2"><i></i>
                <input type="radio" name="q1" value="3"><i></i>
                <input type="radio" name="q1" value="4"><i></i>
                <input type="radio" name="q1" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>2. Curriculum is need based</label><br>

              <span class="star-rating">
                <input type="radio" name="q2" value="1"><i></i>
                <input type="radio" name="q2" value="2"><i></i>
                <input type="radio" name="q2" value="3"><i></i>
                <input type="radio" name="q2" value="4"><i></i>
                <input type="radio" name="q2" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>3. Learning values (concepts, knowledge and analytical abilities)</label><br>

              <span class="star-rating">
                <input type="radio" name="q3" value="1"><i></i>
                <input type="radio" name="q3" value="2"><i></i>
                <input type="radio" name="q3" value="3"><i></i>
                <input type="radio" name="q3" value="4"><i></i>
                <input type="radio" name="q3" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>4. Aims and objectives of the curriculum are well defined and clear </label><br>

              <span class="star-rating">
                <input type="radio" name="q4" value="1"><i></i>
                <input type="radio" name="q4" value="2"><i></i>
                <input type="radio" name="q4" value="3"><i></i>
                <input type="radio" name="q4" value="4"><i></i>
                <input type="radio" name="q4" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>5. Curriculum content is followed by corresponding text books & reference materials.</label><br>

              <span class="star-rating">
                <input type="radio" name="q5" value="1"><i></i>
                <input type="radio" name="q5" value="2"><i></i>
                <input type="radio" name="q5" value="3"><i></i>
                <input type="radio" name="q5" value="4"><i></i>
                <input type="radio" name="q5" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>6. Sufficient number of prescribed books are available in the library </label><br>

              <span class="star-rating">
                <input type="radio" name="q6" value="1"><i></i>
                <input type="radio" name="q6" value="2"><i></i>
                <input type="radio" name="q6" value="3"><i></i>
                <input type="radio" name="q6" value="4"><i></i>
                <input type="radio" name="q6" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>7. Interest has been made by the curriculum in the relevant area </label><br>

              <span class="star-rating">
                <input type="radio" name="q7" value="1"><i></i>
                <input type="radio" name="q7" value="2"><i></i>
                <input type="radio" name="q7" value="3"><i></i>
                <input type="radio" name="q7" value="4"><i></i>
                <input type="radio" name="q7" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>8. The curriculum improves my knowledge in the subject area </label><br>

              <span class="star-rating">
                <input type="radio" name="q8" value="1"><i></i>
                <input type="radio" name="q8" value="2"><i></i>
                <input type="radio" name="q8" value="3"><i></i>
                <input type="radio" name="q8" value="4"><i></i>
                <input type="radio" name="q8" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>9. Course outcomes are well defined and clear</label><br>

              <span class="star-rating">
                <input type="radio" name="q9" value="1"><i></i>
                <input type="radio" name="q9" value="2"><i></i>
                <input type="radio" name="q9" value="3"><i></i>
                <input type="radio" name="q9" value="4"><i></i>
                <input type="radio" name="q9" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">

              <label>10. Curriculum is job/skill oriented </label><br>

              <span class="star-rating">
                <input type="radio" name="q10" value="1"><i></i>
                <input type="radio" name="q10" value="2"><i></i>
                <input type="radio" name="q10" value="3"><i></i>
                <input type="radio" name="q10" value="4"><i></i>
                <input type="radio" name="q10" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr"> -->


              <!-- <label>1. Your overall experience with us ?</label><br>
    
                  <span class="star-rating">
                    <input type="radio" name="rating1" value="1"><i></i>
                    <input type="radio" name="rating1" value="2"><i></i>
                    <input type="radio" name="rating1" value="3"><i></i>
                    <input type="radio" name="rating1" value="4"><i></i>
                    <input type="radio" name="rating1" value="5"><i></i>
                  </span>
                  
                    <div class="clear"></div> 
                    <hr class="survey-hr">

                <label>8. Friendliness and courtesy shown to you while recieving your vehicle</label><br>
                <span class="star-rating">
                  <input type="radio" name="rating2" value="1"><i></i>
                  <input type="radio" name="rating2" value="2"><i></i>
                  <input type="radio" name="rating2" value="3"><i></i>
                  <input type="radio" name="rating2" value="4"><i></i>
                  <input type="radio" name="rating2" value="5"><i></i>
                </span>


                  <div class="clear"></div> 
                  <hr class="survey-hr">
                <label>3. Friendliness and courtesy shown to you while delivery of your vehicle</label><br><br/>
                  <div style="color:grey">
                    <span style="float:left">
                    POOR
                    </span>
                    <span style="float:right">
                      BEST
                    </span>
                    
                  </div>
                <span class="scale-rating">
                  <label value="1">
                  <input type="radio" name="rating" >
                  <label style="width:100%;"></label>
                  </label>
                  <label value="2">
                  <input type="radio" name="rating" >
                  <label style="width:100%;"></label>
                  </label>
                  <label value="3">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="4">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="5">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="6">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="7">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="8">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="9">
                  <input type="radio" name="rating">
                  <label style="width:100%;"></label>
                  </label>
                  <label value="10">
                  <input type="radio" name="rating" value="10">
                  <label style="width:100%;"></label>
                  </label>
                </span> 

                  <div class="clear"></div> 
                  <hr class="survey-hr"> -->

              <!-- <label for="m_3189847521540640526commentText">11. Any Other suggestions:</label><br /><br />
              <textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
              <br>
              <div class="clear"></div>
              <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your Feedback">&nbsp;
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
 -->


  <!-- Analytics -->

<!-- </body>

</html>

<?php
init_public_tail();
?> -->

<!-- <style>
  .rt-container { background-color: rgb(255, 122, 89); } 
</style> -->

