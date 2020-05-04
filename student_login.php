

<?php
/**
 * CS 4342 Database Management
 * @author Kevin Apodaca edited by Alex Sanchez
 * @since 2/12/20
 * @version 1.0
 * Description: The purpose of this file is to serve as simple login system that validates username and password.
 */

session_start();
require_once("config.php");
$_SESSION['logged_in'] = false;

if (!empty($_POST)){
  if (isset($_POST['Submit'])){
    $input_username = isset($_POST['username']) ? $_POST['username'] : " ";
    $input_password = isset($_POST['password']) ? $_POST['password'] : " ";
    
    //$queryUser = "SELECT * FROM user WHERE U_username='".$input_username."' AND U_Password='".$input_password."';"

    $queryStudent = "SELECT * FROM user WHERE UUsername='".$input_username."' AND UPassword='".$input_password."';";
    $resultStudent = $conn->query($queryStudent);
    $row=$resultStudent->fetch_assoc(); 
      echo "first name: " . $row['UUser_Type'] . " last name: ". $row['UF_Name']. "<br />"; 
      echo "first name: " . $row['UUser_Type'] . " last name: ". $row['UF_Name']. "<br />"; 
    if ($row['UUser_Type'] == 'administrator') {
      header("Location: Administrator_Home/admin_home.html");
    }
    
    if ($resultStudent ->num_rows > 0  ) {
      //if there is a result, that means that the user was found in the database
      $_SESSION['UUsername'] = $input_username; 
      $_SESSION['student_user'] = $row['UUsername'];
      $_SESSION['logged_in'] = true;
	    $_SESSION['UF_Name'] = $_POST['first_name'];
      //header("Location: home.php");
      // If resultStudent has more than one rows then set the session loggedin = true then
      //Check the usertype
      if($row['UUser_Type'] == 'applicant') {
      header("Location: ./redirectafterlogin.php");
      }
    //If user type is admin then redirect to ./Administrator_Home/admin_home.html
    /*
    if ($_SESSION['UUser_Type'] == 'administrator') {
      header("Location: Administrator_Home/admin_home.html");
    }
	  else {
      header("Location: ./redirectafterlogin.php");
    }
    */
    

      //echo"User found";
    } else {
      header('Location: index.php?login=failed');
      //echo "User not found.";
    }
  }
}
?>

