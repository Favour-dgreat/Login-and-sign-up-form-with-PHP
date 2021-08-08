<?php
include "db.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
    $query = "SELECT * FROM students WHERE username = " . $_SESSION["username"];
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $user_data = $row;
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-info justify-content-center text-center text-light"  >
<div class="header bg-dark">
	<h2>Student Dashboard</h2>
</div>
<div class="content">

  	<!-- notification message -->
	  <i class="bi bi-person-circle" style="font-size:200px;"></i>
    <br> <br>	
	  <p class="fw-bold" style="font-size:25px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong>Here are your details below</p>
	<br>
	<p>
	<strong><?php echo $user_data['username']; ?></strong>
	<strong><?php echo $user_data['name']; ?></strong>
	<strong><?php echo $user_data['group']; ?></strong>	
	<strong><?php echo $user_data['sex']; ?></strong>
	<strong><?php echo $user_data['phone_number']; ?></strong>
	<strong><?php echo $user_data['user_email']; ?></strong>
	<strong><?php echo $user_data['user_address']; ?></strong>
	<strong><?php echo $user_data['next_of_kin']; ?></strong>
	<strong><?php echo $user_data['next_of_kin_phonenumber']; ?></strong>
	</p>
    	<a class="link-dark" href="logout.php">Click to Logout</a> 
</div>
</body>
</html>
