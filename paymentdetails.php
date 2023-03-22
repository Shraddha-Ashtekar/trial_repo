<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
</head>
<body>
<div class="card">
    <div class="card-header">
      Featured
    </div>
    <?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Payment Information </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Info</div>
									<div class="panel-body">
    <div class="card-body">
      <h5 class="card-title">You have been Registered Successfully!</h5>
      <p class="card-text">Total amount of Rs. 50000/- to be paid</p>
      <p class="card-text">Click Below to Pay</p>
      <a href="paymentform.php" class="btn btn-primary" >Pay</a>

	  <!-- <form action="action.php" method="POST">
     <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="pk_test_51MhnZBSGtlnehUU1S5EeIRPImyro7NWRJ4ppYJCdGemCleLHOQvkKb7ReppH520fTDzG5jkYQmOhFqiMUgHF7o9R00rhxK4bnf"
        data-name="Store Payment"
        data-description="ID - "
        data-amount="50000"
        data-currency="inr"
        data-label="Pay Now">
    </script>
    </form> -->
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
</html>