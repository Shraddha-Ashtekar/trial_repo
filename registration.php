<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
if(isset($_POST['submit']))
{
$img=$_POST['img'];
$sapid=$_POST['sapid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$clgname=$_POST['clgname'];
$course=$_POST['course'];
$aadhar = $_POST['aadhar'];
$emcntno=$_POST['econtact'];
$gurname=$_POST['gname'];
$gurrelation=$_POST['grelation'];
$gurcntno=$_POST['gcontact'];
$caddress=$_POST['address'];
$ccity=$_POST['city'];
$cstate=$_POST['state'];
$cpincode=$_POST['pincode'];
$paddress=$_POST['paddress'];
$pcity=$_POST['pcity'];
$pstate=$_POST['pstate'];
$ppincode=$_POST['ppincode'];
$query="insert into Registration(image,sapid,firstName,middleName,lastName,gender,dob,contactNo,emailid,clgname,course,aadharno,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,corresPincode,pmntAddress,pmntCity,pmnatetState,pmntPincode) 
values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sisssssisissississsisssi',$img,$sapid,$fname,$mname,$lname,$gender,$dob,$contactno,$emailid,$clgname,$course,$aadhar,$emcntno,$gurname,$gurrelation,$gurcntno,$caddress,$ccity,$cstate,$cpincode,$paddress,$pcity,$pstate,$ppincode);
$stmt->execute();
echo"<script>
	alert('Student Successfully register');
	window.location.href='paymentdetails.html';
	</script>";


$conn = "select * from registration";
function checkEmail($conn, $emailInput){
   $query = "SELECT emailid FROM registration WHERE emailid='$emailInput'";
   $result = $conn->query($query);
   if ($result->num_rows > 0) {
	 echo "<script>alert('This Email is alredy exists'); </script>";
   } else {
	echo"<script>alert('Student Successfully register');</script>";
   }
if(!empty(isset($_POST['emailid'])) && isset($_POST['emailid'])){
	$emailInput= $_POST['emailid'];
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
const dateControl = document.querySelector('input[type="date"]');
dateControl.value = '2017-06-01';
console.log(dateControl.value); // prints "2017-06-01"
console.log(dateControl.valueAsNumber);
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
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">SVKM </div>
									<div class="panel-body">
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
			<?php
							$uid=$_SESSION['login'];
							 $stmt=$mysqli->prepare("SELECT emailid FROM registration WHERE emailid=? ");
				$stmt->bind_param('s',$uid);
				$stmt->execute();
				$stmt -> bind_result($email);
				$rs=$stmt->fetch();
				$stmt->close();
				if($rs)
				{ ?>
			<h3 style="color: red" align="left">You Already Registered!</h3>
				<?php }
				else{
							echo "";
							}			
							?>									
			<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Student Information </h4> </label>
</div>										

<div class="form-group">
<label class="col-sm-2 control-label"> Sap ID : </label>
<div class="col-sm-8">
<input type="number" name="sapid" id="sapid" placeholder="Sap Id" class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname" placeholder="Middle Name" class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Date of Birth : </label>
<div class="col-sm-8">
<input type="date" name="dob" id="dob" class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="number" name="contact" id="contact" data-error="Enter Min 10 Digit" data-minlength="10" class="form-control" placeholder="Contact Number" required="required">
<div class="help-block with-errors"></div>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8">
<input type="email" name="email" id="email" placeholder="Email" class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">College Name : </label>
<div class="col-sm-8">
<select name="clgname" id="clgname" class="form-control" required="required">
<option value="">Select College</option>
<option value="1">SVKM's Mithibai College of Arts Science and Commerece</option>
<option value="2">SVKM's Narsee Monjee College of Commerce & Economics</option>
<option value="3">SVKM's Usha Pravin Gandhi College of Arts, Science and Commerce</option>
<option value="4">SVKM's Narsee Monjee Institute of Management Studies</option>
<option value="5">SVKM's Mukesh Patel School of Technology Management & Engineering</option>
<option value="6">SVKM's Shri Bhagubhai Mafatlal Polytechnic</option>
<option value="7">SVKM's Dr. Bhanuben Nanavati College of Pharmacy</option>
<option value="8">SVKM's Dwarkadas Jivanlal Sanghvi College of Engineering</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">course </label>
<div class="col-sm-8">
<select name="course" id="course" class="form-control" required> 
<option value="">Select Course</option>
<?php $query ="SELECT * FROM course";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->coursename;?>"><?php echo $row->coursename;?>)</option>
<?php } ?>
</select> </div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Aadhar Number : </label>
<div class="col-sm-8">
<input type="number" name="aadhar" id="aadhar"  class="form-control" placeholder="Aadhar Number" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Emergency Contact: </label>
<div class="col-sm-8">
<input type="number" name="econtact" id="econtact"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Name : </label>
<div class="col-sm-8">
<input type="text" name="gname" id="gname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Relation : </label>
<div class="col-sm-8">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="number" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Correspondense Address </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="address"  id="address" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="state" id="state"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							

<div class="form-group">
<label class="col-sm-2 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="number" name="pincode" id="pincode"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Permanent Address </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
<div class="col-sm-4">
<input type="checkbox" name="adcheck" value="1"/>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="paddress"  id="paddress" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="pcity" id="pcity"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="pstate" id="pstate"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							

<div class="form-group">
<label class="col-sm-2 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="number" name="ppincode" id="ppincode"  class="form-control" required="required">
</div>
</div>	

						
<div class="form-group">
<label class="col-sm-2 control-label">Upload Photo : </label>
<div class="col-sm-8">
<input type="file" name="img" id="img"  class="form-control" required="required">
</div>
</div>


<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
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

<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


<script type="text/javascript">

$(document).ready(function() {
	$('#duration').keyup(function(){
		var fetch_dbid = $(this).val();
		$.ajax({
		type:'POST',
		url :"ins-amt.php?action=userid",
		data :{userinfo:fetch_dbid},
		success:function(data){
	    $('.result').val(data);
		}
		});
		

})});
</script>
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