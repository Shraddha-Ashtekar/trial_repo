<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$sapid=$_POST['sapid'];
$emailid=$_POST['email'];
$password=$_POST['password'];
$query="insert into  userRegistration(sapid,email,password) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iss',$sapid,$emailid,$password);
$stmt->execute();
$conn = "select * from userregistration";
function checkEmail($conn, $emailInput){
   $query = "SELECT email FROM userregistration WHERE email='$emailInput'";
   $result = $conn->query($query);
   if ($result->num_rows > 0) {
	 echo "<script>alert('This Email is alredy exists'); </script>";
   } else {
	echo"<script>alert('Student Successfully register');</script>";
   }
if(!empty(isset($_POST['email'])) && isset($_POST['email'])){
	$emailInput= $_POST['email'];
	checkEmail($conn, $emailInput);
   
 }
 
}

}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Student SignUp </h2>

						<div class="row">
							<div class="col-md-12">
								
                                        
						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light border border-dark">
							<div class="col-md-8 col-md-offset-2">
			<form method="post" action="user.php" name="registration" class="form-horizontal" onSubmit="return valid();">
											

                                <div class="form-group">
                                <label class="control-label mb text-uppercase text-sm"> Sap ID : </label>

                                <input type="text" name="sapid" id="sapid"  class="form-control" required="required" >
                                </div>


                                <div class="form-group">
                                <label class=" control-label mb text-uppercase text-sm">Email id: </label>
                                <input type="email" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
                                <span id="user-availability-status" style="font-size:12px;"></span>
                                </div>


                                <div class="form-group">
                                <label class="control-label mb text-uppercase text-sm">Password: </label>
                                <input type="password" name="password" id="password"  class="form-control" required="required">
                                </div>



                                <div class="form-group">
                                <label class="control-label mb text-uppercase text-sm">Confirm Password : </label>
                                <input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
                                </div>

                                                        



                                <div class="form-group">
                                <button type="submit" name="submit"class="text-uppercase text-sm btn btn-primary btn-block" style="font-family: sans-serif; font-size:20px; background-color:  #0F9FB4;" Value="Register" class="btn btn-primary">Sign up</button>
                                <button class="btn btn-default btn-block" type="reset">Cancel</button>
                                </div>
                                <div class="text-center text-danger" style="color:black;">
                                                            Already Have an Account?<a href="user.php" style="color:blue;"> Login</a>
                                                        </div>
                                </form>



                                        </div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
	<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>