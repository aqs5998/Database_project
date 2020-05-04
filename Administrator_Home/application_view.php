
<!DOCTYPE html>
<html>
<body>

<?php

session_start();
require_once('config.php');

$host = "ilinkserver.cs.utep.edu";
$db = 'S20am_team5';   # enter your team database here.

$username = "asanchez44";  # enter your username here.
$password = "1234";  # enter your password here.

// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "AppID: ". $row["APTNApp_ID"] . "Applicant Username " . $row["APPUsername"] . " Application Statement " . $row["APTNP_Statement"] . " " . " Application Transcript " . $row["APTNP_Transcript"] . " APTN_Resume  " . $row["UUser_Type"] . " Preffered Position " . $row["APTN_Letter_of_Rec"] . " Preffered Course " . $row["APTN_Pref_Course"] .  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
