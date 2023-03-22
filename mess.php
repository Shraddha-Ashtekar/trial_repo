<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Profile Updation</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-left: 20px;
  display: center;
  position: relative;
}

h2{
  text-align: center;
}
</style>
</head>
<body>
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<br><br>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
                        <div class="stat-panel-number h1 ">Mess Menu</div>


												</div></div>
 <div>
<h2>Monday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Poha</p>
      <p>Milk/Tea</p>
      <p>Jalebi</p>
      <p>Bread</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice</p>
      <p>Roti</p>
      <p>Paneer Masala</p>
      <p>Dal</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Paratha</p>
      <p>Aloo Sabji</p>
      <p>Custard Milk</p>
      <p>Pulav</p>
    </div>
  </div>
</div>
<br>
<h2>Tuesday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Khakhra</p>
      <p>Tea/Mik</p>
      <p>Upma</p>
      <p>Pickle</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice</p>
      <p>Dal</p>
      <p>Roti</p>
      <p>Bhindi</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Dosa</p>
      <p>Idli</p>
      <p>Rice</p>
      <p>Dal Fry</p>
    </div>
  </div>
</div>

<br>
<h2>Wednesday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Tea/Milk</p>
      <p>Poha</p>
      <p>Fafda</p>
      <p>Jalebi</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice-Dal</p>
      <p>Roti</p>
      <p>Aloo Gobi</p>
      <p>Chass</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Bhel</p>
      <p>Pani-puri</p>
      <p>Chat</p>
      <p>Sev-Puri</p>
    </div>
  </div>
</div>

<br>
<h2>Thrusday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Idli</p>
      <p>Bread-Butter</p>
      <p>Tea/Milk</p>
      <p>Juice</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice-dal</p>
      <p>Chole</p>
      <p>Puri</p>
      <p>Papad</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Sandwich</p>
      <p>Fried Rice</p>
      <p>Chass</p>
      <p>Lassi</p>
    </div>
  </div>
</div>

<br>
<h2>Friday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Poha</p>
      <p>Upma</p>
      <p>Tea/Milk</p>
      <p>Chakri</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice-Dal</p>
      <p>Palak Panner</p>
      <p>Roti</p>
      <p>Chass</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Dabeli</p>
      <p>Chat</p>
      <p>Manchurain</p>
      <p>Soup</p>
    </div>
  </div>
</div>

<br>
<h2>Saturday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>Tea/Milk</p>
      <p>Khakhra</p>
      <p>Bread-Jam</p>
      <p>Gathiya</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice-Dal</p>
      <p>Kolhapuri Sabji</p>
      <p>Roti</p>
      <p>Pickle</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Pizza</p>
      <p>Pasta</p>
      <p>Paneer Chilli</p>
      <p>Sizzler</p>
    </div>
  </div>
</div>

<br>
<h2>Sunday</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Breakfast</h3>
      <p>pooranpoli</p>
      <p>Tea/Milk</p>
      <p>Chevda</p>
      <p>Biscuits</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Lunch</h3>
      <p>Rice-Dal</p>
      <p>Roti</p>
      <p>Undhyu</p>
      <p>Shrikhand</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Dinner</h3>
      <p>Vadapav</p>
      <p>shezwan Noodles</p>
      <p>Falafal</p>
      <p>Chinese Bhel</p>
    </div>
  </div>
</div>

<!-- Loading Scripts -->
<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>  
  