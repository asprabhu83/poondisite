<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

	if($rno=="" || $pwd=="")
	{
	$err="<font color='red'>Please Enrte your Register Number and Password fileds first</font>";	
	}
	else
	{
// $pass=md5($pwd);	

// $sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");
$sql=mysqli_query($conn,"select * from studentmaster where username='$rno' and pwd='$pwd'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$rno;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>Login Form</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Register Number</div>
		<div class="col-sm-5">
		<input type="text" name="rno" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Password</div>
		<div class="col-sm-5">
		<input type="password" name="pwd" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>