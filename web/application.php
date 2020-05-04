
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>
<head>
<title>Job Application Form</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Job Application Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="cssTwo/j-forms.css">
<link href="cssTwo/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="content">
		<h1>job application form</h1>
		<div class="main">
			<form class="contact-forms">
				<!-- end /.header-->

				<!-- start files -->
					
						<div class=" main-row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
								<input type="text" id="file1_input" readonly="" placeholder="Add your personal statement">
								<span class="hint">Only: pdf / doc Size: less than 1 Mb</span>
							</label>
						</div>
						
					
					<!-- end files -->

					<!-- start files -->
					
						<div class=" main-row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file2" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
								<input type="text" id="file2_input" readonly="" placeholder="Add your letter of recommendation ">
								<span class="hint">Only: pdf / doc Size: less than 1 Mb</span>
							</label>
						</div>
						
					
					<!-- end files -->

					<!-- start files -->
					
						<div class=" main-row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file3" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
								<input type="text" id="file3_input" readonly="" placeholder="Add your transcript">
								<span class="hint">Only: pdf / doc Size: less than 1 Mb</span>
							</label>
						</div>
						
					
					<!-- end files -->

					<!-- start files -->
					
						<div class=" main-row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file4" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
								<input type="text" id="file4_input" readonly="" placeholder="Add your resume">
								<span class="hint">Only: pdf / doc Size: less than 1 Mb</span>
							</label>
						</div>
						
					
					<!-- end files -->

					<!-- start course -->
					<div class="main-row">
						<label class="input select">
							<select name="course">
								<option value="none" selected="" disabled="">Select Course</option>
								
								<option value="CS3331">CS3331</option>
								<option value="CS1301">CS1301</option>
								<option value="CS2301">CS2301</option>
							</select>
							<i></i>
						</label>
					</div>
					<!-- end course -->

					<!-- start position -->
					<div class="main-row">
						<label class="input select">
							<select name="position">
								<option value="none" selected disabled="">Choose desired position</option>
								<option value="TA">Teacher Assistant</option>
								<option value="PL">Peer Leader</option>
								<option value="IA">Instructional Assistant</option>
							</select>
							<i></i>
						</label>
					</div>
					<!-- end position -->
			
				<!-- end /.content -->

				<div class="footer">
					<button name="Submit" type="submit" class="primary-btn">Send</button>
					<button type="reset" class="secondary-btn">Reset</button>
				</div>
				<!-- end /.footer -->

			</form>
		</div>
		<p class="copy_rights">&copy; 2020 Job Application Form Widget. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
		<!-- Scripts -->
		<script src="jsTwo/jquery.1.11.1.min.js"></script>

		<!--[if lt IE 10]>
				<script src="j-folder/js/jquery.placeholder.min.js"></script>
			<![endif]-->

		<script>
			$(document).ready(function(){

				// Phone masking
				$('#phone').mask('(999) 999-9999', {placeholder:'x'});

				// Post code masking
				$('#post').mask('999-9999', {placeholder:'x'});

			});
		</script>
	
<?php

if (isset($_POST['Submit'])) {

    $userID = " ";
    /**
     * Grab information from the form submission and store values into variables.
     */
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : " ";
    $middleName = isset($_POST['middle_name']) ? $_POST['middle_name'] : " ";
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : " ";
    $username = isset($_POST['username']) ? $_POST['username'] : " ";
	$email = isset($_POST['email']) ? $_POST['email'] : " ";
    $password = isset($_POST['password']) ? $_POST['password'] : " ";
	
	
		
	
	//insert to User table;
	$queryUser  = "INSERT INTO Student (U_username, U_password, U_first, U_middle, U_last)
				VALUES ('".$username."', '".$password."', '".$firstName."', '".$middleName."', '".$lastName."');";
	if ($conn->query($queryUser) === TRUE) {
	   // echo "New record created successfully";
	} else {
		echo "<H2>Error: </H2>" . $queryUser . "<br>" . $conn->error;
	}
	echo "<H2>Hello " .$firstName. " ".$middleName." ".$lastName."!<br> Your username is: ".$username."</H2>";
	
	
}
?>


</body>
</html>
