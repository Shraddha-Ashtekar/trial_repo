<html>
	<head>
	<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8ed636c861.js" crossorigin="anonymous"></script>
</head>
<body>
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px; background-color: #01976d2; color: white; font-family: Georgia;">Welcome to SVKM Hostel!</a>
		
		<ul class="ts-profile-nav">
			<li class="ts-account" >
				<a href="#" style="border-color: #0F9FB4; opacity: 0.1;"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt="" > Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php" style="background-color: #01976d2;"><i class="fa-solid fa-circle-user" style="background: white;"></i>   My Account</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:14px; background-color: #0172AF; color:white; font-family: Georgia;">Welcome to SVKM Hostel!</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>
</body>
</html>