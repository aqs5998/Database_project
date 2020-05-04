<?php
include('student_login.php');
session_start();
if($_SESSION['logged_in'] == 'false' || $_SESSION['student_user'] == null){
   //send them back
   header("Location: ./empty.php");
}
header("Refresh:5; url=homepage.php");


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Succesful!</title>
	<div class="card-header">
		<?php echo $_SESSION['student_user']; ?>
   	<h3>Login Succesful, Congrats <?php echo $_SESSION['student_user']; ?>!  
		redirecting you in 5 seconds</h3>
	</div>
	<a href="logout.php">Logout</a>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

</body>
</html>