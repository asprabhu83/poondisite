<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{
// check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where rollno='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
// $hob=implode(",",$hob);

//image
$imagename=$_FILES['img']['name'];


//encrypt your password
$pass=md5($pwd);


$query="insert into user values('','$rno','$nam','$gen','$dob','$e','$pass','$mob','$bat','$shi','$pro','$year','$deg','$dep','$sec','$sem','$imagename',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}

?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-bottom:50px">
	<caption><h2 align="center">Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Enter Your Rollno</td>
					<Td><input  type="text" name="rno" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="nam" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="M"/>
				Female<input type="radio" name="gen" value="F"/>	
					</td>
				</tr>

				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>					
					</td>
				</tr>

				
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="pwd" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				

				<tr>
					<td>Select Your Batch</td>
					<Td><select name="bat" class="form-control" required>					
					<option>None</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>													
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Shift</td>
					<Td><select name="shi" class="form-control" required>					
					<option>None</option>
					<option>Day</option>
					<option>Evening</option>					
					</select>
					</td>
				</tr>

				<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>					
					<option>None</option>
					<option>UG</option>
					<option>PG</option>					
					<option>M.Phil</option>					
					<option>Ph.D</option>					
					</select>
					</td>
				</tr>
				<tr>
					<td>Select Year</td>
					<Td><select name="year" class="form-control" required>					
					<option>None</option>
					<option>I</option>
					<option>II</option>					
					<option>III</option>					
					</select>
					</td>
				</tr>

				<tr>
					<td>Select Your Degree</td>
					<Td><select name="deg" class="form-control" required>
					<option>None</option>
					<option>BA</option>
					<option>B.Sc.,</option>
					<option>B.Com</option>
					<option>BCA</option>
					<option>BBA</option>
					<option>B.Litt</option>
					<option>MA</option>
					<option>M.Sc.,</option>
					<option>M.Com</option>
					<option>MCA</option>
					<option>MBA</option>
					<option>MLIS</option>

					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Department</td>
					<Td><select name="dep" class="form-control" required>
					<option>None</option>
					<option>Histroy</option>
					<option>Economics</option>
					<option>Tamil</option>
					<option>Indian Culture</option>					
					<option>English</option>
					<option>Commerce</option>
					<option>Mathematics</option>
					<option>Physics</option>
					<option>Chemistry</option>
					<option>Botany</option>
					<option>Zoology</option>
					<option>Computer Science</option>
					<option>Computer Applications</option>
					<option>Physical Educations</option>
					<option>Management Studies</option>
					<option>Library Science</option>
					<option>Geography</option>
					<option>Statistics</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Section</td>
					<Td><select name="sec" class="form-control" required>					
					<option>None</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
					<option>F</option>
					<option>G</option>
					<option>H</option>
					<option>I</option>	
					
					</select>
					</td>
				</tr>
				
					
				<tr>
					<td>Select Your Semester</td>
					<Td><select name="sem" class="form-control" required>
					<option>None</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>				
					
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr> 

				<!-- <tr>
					<td>Choose Your hobbies</td>
					<Td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singin" type="checkbox" name="hob[]"/>
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr> -->
				
				
				<!-- <tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr> -->
				
				<!-- <tr>
					<td>Enter Your DOB</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr> -->
				
				<tr>					
					<Td colspan="2" align="center">
						<input type="submit" value="Save" class="btn btn-info" name="save"/>
						<input type="reset" value="Reset" class="btn btn-info"/>				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>