<?php include('app_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form class="card-body" action="enter_email.php" method="post">
		<h2 class="card-header">Reset password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="input-group form-group">
			<label>Your email address</label>
			<input type="email" name="email" placeholder="email" required>
		</div>
		<div class="input-group form-group">
			<button type="submit" name="reset-password" class="btn float-right login_btn">Submit</button>
		</div>
	</form>
</body>
</html>