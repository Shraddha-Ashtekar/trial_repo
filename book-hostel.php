<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
include('ajax.php');
check_login();
//code for registration
if(isset($_POST['submit']))
{
$roomno=$_POST['room'];
$seater=$_POST['seater'];
$feespm=$_POST['fpm'];
$foodstatus=$_POST['foodstatus'];
$stayfrom=$_POST['stayf'];
$duration=$_POST['duration'];
$course=$_POST['course'];
$sapid=$_POST['sapid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
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
$query="insert into  registration(roomno,seater,feespm,foodstatus,stayfrom,duration,course,sapid,firstName,middleName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,corresPincode,pmntAddress,pmntCity,pmnatetState,pmntPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iiiisiiissssisississsisssi',$roomno,$seater,$feespm,$foodstatus,$stayfrom,$duration,$course,$sapid,$fname,$mname,$lname,$gender,$contactno,$emailid,$emcntno,$gurname,$gurrelation,$gurcntno,$caddress,$ccity,$cstate,$cpincode,$paddress,$pcity,$pstate,$ppincode);
$stmt->execute();
echo"<script>
	alert('Student Successfully register');
	window.location.href='paymentdetails.html';
	</script>";
	//$room_no = $_POST["room_no"];

	// Query the database to retrieve the availability and maximum occupancy of the selected room
	// $sql = "SELECT occupancy FROM rooms WHERE room_no = '$room_no'";
	// $result = mysqli_query($conn, $sql);
  
	// // Display the availability of the selected room to the user
	// if (mysqli_num_rows($result) > 0) {
	//   $row = mysqli_fetch_assoc($result);
	//   $available_capacity = $row["occupancy"] - $row["availability"] * 3;
	//   echo "Room number " . $room_no . " has " . $available_capacity . " available spots.";
	// } else {
	//   echo "Room number " . $room_no . " is not found in our system";
	// }
  
  
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
	<title>Student Hostel Registration</title>
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
<script type="text/javascript" src="custom.js"></script>
<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="foundation-datepicker.min.js"></script>

</head>
<body>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
<?php
$mysqli =new mysqli($host,$dbuser, $dbpass, $db); 
if (isset($_GET['room_id'])){
    $get_room_id = $_GET['room_id'];
    $get_room_sql = "SELECT * FROM room NATURAL JOIN room_type WHERE room_id = '$get_room_id'";
    $get_room_result = mysqli_query($mysqli,$get_room_sql);
    $get_room = mysqli_fetch_assoc($get_room_result);

    $get_room_type_id = $get_room['room_type_id'];
    // $get_room_type = $get_room['room_type'];
    $get_gender = $get_gender['gender'];
    $get_room_no = $get_room['room_no'];
    $get_room_price = $get_room['price'];
}
?>

<div class="row">
        <div class="col-lg-12">
            <form role="form" id="booking" data-toggle="validator">
                <div class="response"></div>
                <div class="col-lg-12">
                    <?php
                    if (isset($_GET['room_id'])){?>

                        <div class="panel panel-default">
                            <div class="panel-heading">Room Information:
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <select class="form-control" id="room_type" data-error="Select Room Type" required>
                                        <option selected disabled>Select Room Type</option>
                                        <option selected value="<?php echo $get_room_type_id; ?>"><?php echo $get_room_type; ?></option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Room No</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Select Room No">
                                        <option selected disabled>Select Room No</option>
                                        <option selected value="<?php echo $get_room_id; ?>"><?php echo $get_room_no; ?></option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check In Date</label>
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="check_in_date" data-error="Select Check In Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check Out Date</label>
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="check_out_date" data-error="Select Check Out Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 style="font-weight: bold">Total Days : <span id="staying_day">0</span> Days</h4>
                                    <h4 style="font-weight: bold">Price: <span id="price"><?php echo $get_room_price; ?></span> /-</h4>
                                    <h4 style="font-weight: bold">Total Amount : <span id="total_price">0</span> /-</h4>
                                </div>
                            </div>
                        </div>
                    <?php } else{?>
                        <div class="panel panel-default">
                            <div class="panel-heading">Room Information:
                             
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-lg-6">
								<label>Gender</label>
                                    <select class="form-control" id="gender" onchange="fetch_room(this.value);" required data-error="Select Gender">
                                        <option selected disabled>Select Gender</option>
                                        <?php
                                        $query  = "SELECT * FROM room_type";
                                        $result = mysqli_query($mysqli,$query);
                                        if (mysqli_num_rows($result) > 0){
                                            while ($gender = mysqli_fetch_assoc($result)){
                                                echo '<option value="'.$gender['room_type_id'].'">'.$gender['gender'].'</option>';
                                            }}
                                        ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Room No</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Select Room No">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check In Date</label>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="check_in_date" data-error="Select Check In Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check Out Date</label>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="check_out_date" data-error="Select Check Out Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 style="font-weight: bold">Total Days : <span id="staying_day">0</span> Days</h4>
                                    <h4 style="font-weight: bold">Price: <span id="price">0</span> /-</h4>
                                    <h4 style="font-weight: bold">Total Amount : <span id="total_price">0</span> /-</h4>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>					
<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="reset">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

<?php
$query = "SELECT check_in from booking where booking_id = ?";
$check_in_date = ($query); // example selected date
$timestamp = strtotime($check_in_date); // convert selected date to timestamp
$date_obj = date_create($check_in_date); // create a DateTime object
date_add($date_obj, date_interval_create_from_date_string('3 months')); // add 3 months to the date object
$three_months_date = date_format($date_obj, 'Y-m-d'); // convert the date object back to a string
$fees_per_month = 1500; // example fees per month
$total_fees = $fees_per_month * 3; // calculate fees for 3 months
echo "The fees for 3 months starting from $check_in_date is $total_fees."; // display the result
?>



										<script>
											var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
var checkin = $('#check_in_date').fdatepicker({
    format: 'dd-mm-yyyy',
    onRender: function (date) {
        return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function (ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
        var newDate = new Date(ev.date)
        newDate.setDate(newDate.getDate() + 1);
        checkout.update(newDate);
    }
    checkin.hide();
    $('#check_out_date')[0].focus();
}).data('datepicker');
var checkout = $('#check_out_date').fdatepicker({
    format: 'dd-mm-yyyy',
    onRender: function (date) {
        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function (ev) {
    checkout.hide();
    var totalDays = Math.floor((checkout.date - checkin.date)/86400000);
    var price = document.getElementById('price').innerHTML;
    var total_price = (totalDays+1)*(price);
    $('#staying_day').html(totalDays+1);
    $('#total_price').html(total_price);
}).data('datepicker');
										</script>

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

	<!-- Booking Confirmation-->
<div id="bookingConfirm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><b>Room Booking</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert bg-success alert-dismissable" role="alert"><em class="fa fa-lg fa-check-circle">&nbsp;</em>Room Successfully Booked</div>
                        <table class="table table-striped table-bordered table-responsive">
                            <!-- <thead>
                            <tr>
                                <th>Name</th>
                                <th>Detail</th>
                            </tr>
                            </thead> -->
                            <tbody>
                            <tr>
                                <td><b>Customer Name</b></td>
                                <td id="getCustomerName"></td>
                            </tr>
                            <tr>
                                <td><b>Room Type</b></td>
                                <td id="getRoomType"></td>
                            </tr>
                            <tr>
                                <td><b>Room No</b></td>
                                <td id="getRoomNo"></td>
                            </tr>
                            <tr>
                                <td><b>Check In</b></td>
                                <td id="getCheckIn"></td>
                            </tr>
                            <tr>
                                <td><b>Check Out</b></td>
                                <td id="getCheckOut"></td>
                            </tr>
                            <tr>
                                <td><b>Total Amount</b></td>
                                <td id="getTotalPrice"></td>
                            </tr>
                            <tr>
                                <td><b>Payment Status</b></td>
                                <td id="getPaymentStaus"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" style="border-radius:60px;" href="index.php?reservation"><i class="fa fa-check-circle"></i></a>
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
	<script src='ajax.js'></script>
	<script src="custom.js"></script>
	<script src="bootstrap-datepicker.min.js"></script>
	<script src="foundation-datepicker.min.js"></script>
	<script src="jquery-1.11.1.min.js"></script>
	<script src="validator.min (2)"></script>
</body>

</html>