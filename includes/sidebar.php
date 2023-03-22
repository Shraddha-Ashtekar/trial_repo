<html>
<head>
<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8ed636c861.js" crossorigin="anonymous"></script>
</head>	
<body>
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li style="font-family: Lato; font-size: 17px;" ><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="registration.php"><i class="fa fa-user"></i>User Registration</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="my-profile.php"><i class="fa fa-user"></i> Change Profile</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="change-password.php"><i class="fa-solid fa-lock"></i>Change Password</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="change-room.php"><i class="fa-solid fa-lock"></i>Change Room</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="book-hostel.php"><i class="fa-solid fa-hotel"></i>Book Hostel</a></li>
					<li style="font-family: Lato; font-size: 17px;" ><a href="paymentdetails.php"><i class="fa-solid fa-money-check"></i>Payment</a></li>
<?php } else { ?>
				
				<li style="font-family: Lato; font-size: 17px;" ><a href="user.php"><i class="fa fa-users"></i> User Login</a></li>
				<li style="font-family: Lato; font-size: 17px;" ><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>
</body>
</html>