

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
    
    $queryStudent = "SELECT * FROM Student  WHERE U_username='".$input_username."' AND U_Password='".$input_password."';";
    $resultStudent = $conn->query($queryStudent);

    if ($resultStudent ->num_rows > 0  ) {
      //if there is a result, that means that the user was found in the database
      $_SESSION['student_user'] = $input_username; 
      $_SESSION['logged_in'] = true;
      //header("Location: home.php");
	  header("Location: ./redirectafterlogin.php");

      //echo"User found";
    } else {
      //header("Location: http://getwallpapers.com/wallpaper/full/9/f/0/934924-dog-desktop-wallpaper-1920x1200-for-1080p.jpg");
      //echo "User not found.";
    }
  }
}
?>

