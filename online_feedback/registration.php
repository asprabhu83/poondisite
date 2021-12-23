<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

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
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$rn','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
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
					<Td><input  type="text" name="rn" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>
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
					<td>Select Your Semester</td>
					<Td><select name="sem" class="form-control" required>
					<option>None</option>
					<option>I</option>
					<option>II</option>
					<option>III</option>
					<option>IV</option>
					<option>V</option>
					<option>VI</option>
					
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="M"/>
				Female<input type="radio" name="gen" value="F"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your hobbies</td>
					<Td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singin" type="checkbox" name="hob[]"/>
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
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