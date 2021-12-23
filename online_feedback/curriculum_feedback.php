<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
// $sql=mysqli_query($conn,"select * from feedback where student_id='$user'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";
}
else
{
// $query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";
$query="insert into feedback_curriculum values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11',now())";
// $query="insert into feedback_curriculum values('','$user','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11',now())";
mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<h1><center><u>Student's FeedBack Form</u></center><br></h1>
 
<fieldset>



<h3>Please give your answer about the following question by circling the given grade on the scale:</h3>


<!-- <button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Excellent 4</button>
<button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Good 3</button>
<button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Satisfactory 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px">Poor 1</button>
<button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Strongly Disagree 1</button><br>  -->

<table class="table table-bordered" style="margin-top:50px">
<tr>

<th> Select Faculty :</th>
<td>
<select name="faculty" class="form-control">
	<?php
$sql=mysqli_query($conn,"select * from faculty where semester='".$users['semester']."'");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
</tr>
</table>





<h3>Questionnaire</h3>
<table class="table table-bordered">
<tr>
<th><b> Questionnaire</b></td>  
<th><button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Excellent 4</button></th>
  <th><button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Good 3</button></th>
  <th><button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Satisfactory 2</button></th>
  <th><button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px">Poor 1</button></th>
</tr>

<!-- <tr>
<td><b>1:</b> Contents of the courses and relevance of the units</td>  
<td><input type="radio" name="quest1" value="4" required><button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Excellent 4</button></td>
  <td><input type="radio" name="quest1" value="3"><button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Good 3</button></td>
  <td><input type="radio" name="quest1" value="2"><button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Satisfactory 2</button></td>
  <td><input type="radio" name=" quest1" value="1"><button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px">Poor 1</button></td>
</tr>   -->

<tr>
<td><b>1:</b> Contents of the courses and relevance of the units</td>  
<td><input type="radio" name="quest1" value="4" required>Excellent</td>
  <td><input type="radio" name="quest1" value="3">Good</td>
  <td><input type="radio" name="quest1" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest1" value="1">Poor</td>
</tr>

<tr>
<td><b>2:</b>Size of the syllabus in terms of  the load of the students</td> 
<td><input type="radio" name="quest2" value="4" required>Excellent</td>
  <td><input type="radio" name="quest2" value="3">Good</td>
  <td><input type="radio" name="quest2" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest2" value="1">Poor</td>
</tr>

<tr>
<td>
<b>3:</b>Usefulness of the course in terms of knowledge, concept and analytical abilities</td> 
<td><input type="radio" name="quest3" value="4" required>Excellent</td>
  <td><input type="radio" name="quest3" value="3">Good</td>
  <td><input type="radio" name="quest3" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest3" value="1">Poor</td>
</tr>

<tr>
<td><b>4:</b> Core/Allied papers given due consideration</td>  
<td><input type="radio" name="quest4" value="4" required>Excellent</td>
  <td><input type="radio" name="quest4" value="3">Good</td>
  <td><input type="radio" name="quest4" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest4" value="1">Poor</td>
</tr>

<tr>
<td><b>5:</b> Choices of NME/EDC relevance to the technological developments</td>  
<td><input type="radio" name="quest5" value="4" required>Excellent</td>
  <td><input type="radio" name="quest5" value="3">Good</td>
  <td><input type="radio" name="quest5" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest5" value="1">Poor</td>
</tr>

<tr>
<td><b>6:</b> Syllabus framed by providing with text books and reference books</td>  
<td><input type="radio" name="quest6" value="4" required>Excellent</td>
  <td><input type="radio" name="quest6" value="3">Good</td>
  <td><input type="radio" name="quest6" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest6" value="1">Poor</td>
</tr>

<tr>
<td><b>7:</b> Curriculum guides to critical and creative thinking</td>  
<td><input type="radio" name="quest7" value="4" required>Excellent</td>
  <td><input type="radio" name="quest7" value="3">Good</td>
  <td><input type="radio" name="quest7" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest7" value="1">Poor</td>
</tr>

<tr>
<td><b>8:</b> Curriculum designed for career oriented</td>  
<td><input type="radio" name="quest8" value="4" required>Excellent</td>
  <td><input type="radio" name="quest8" value="3">Good</td>
  <td><input type="radio" name="quest8" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest8" value="1">Poor</td>
</tr>

<tr>
<td><b>9:</b> Curriculum designed in a way that achieves the targeted goals</td>  
<td><input type="radio" name="quest9" value="4" required>Excellent</td>
  <td><input type="radio" name="quest9" value="3">Good</td>
  <td><input type="radio" name="quest9" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest9" value="1">Poor</td>
</tr>

<tr>
<td><b>10:</b> Applicability/relevance to real life situations </td>  
<td><input type="radio" name="quest10" value="4" required>Excellent</td>
  <td><input type="radio" name="quest10" value="3">Good</td>
  <td><input type="radio" name="quest10" value="2">Satisfactory</td>
  <td><input type="radio" name=" quest10" value="1">Poor</td>
</tr>

</table>

<b>11:</b>Any Other comment about curriculum:<br><br>
<center>
<textarea name="quest11" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">
</textarea></center><br><br>

<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p>

</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>