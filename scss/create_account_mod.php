<?php
/**
 * CS 4342 Database Management
 * @author Kevin Apodaca
 * @since 2/12/20
 * @version 1.0
 * Description: The purpose of this file is to serve as a template for students to create users and populate them into the database.
 */

require_once('config.php');
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
<title>CS4342 Sign Up</title>
</head>
<body>
<h1>CREATE ACCOUNT</h1>
<div class="input-group form-group" id=menu>
<form action="create_account.php" method="post">
First Name: <input type="text" name="first_name" class="form-control"><br><br>
Middle Name: <input type="text" name="middle_name" class="form-control"><br><br>
Last Name: <input type="text" name="last_name" class="form-control" ><br><br>

username: <input type="text" name="username" class="form-control" ><br><br>
email: <input type="email" name="email" class="form-control" ><br><br>	
password: <input type="password" name="password" class="form-control"><br><br>

<input name='Submit' class="btn float-right login_btn" type="submit" value="Create">
</form>
<br><br>
	<a href="index.php">Back</a>
</div>
<?php
if (isset($_POST['Submit'])){

    $userID = " ";
    /**
     * Grab information from the form submission and store values into variables.
     */
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : " ";
    $middleName = isset($_POST['middle_name']) ? $_POST['middle_name'] : " ";
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : " ";
    $username = isset($_POST['username']) ? $_POST['username'] : " ";
	$username = isset($_POST['email']) ? $_POST['email'] : " ";
    $password = isset($_POST['password']) ? $_POST['password'] : " ";

    //insert to User table;
    $queryUser  = "INSERT INTO Student (U_username, U_password, U_first, U_middle, U_last)
                VALUES ('".$username."', '".$password."', '".$firstName."', '".$middleName."', '".$lastName."');";
    if ($conn->query($queryUser) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
    }
    echo "<p>Hello " .$firstName. " ".$middleName." ".$lastName."!<br> Your username is: ".$username."</p>";

}
?>

</body>
</html>
