<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
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
	  <p class="fw-bold" style="font-size:25px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<a class="link-dark" href="logout.php">Click to Logout</a> 
</div>
</body>
</html>
