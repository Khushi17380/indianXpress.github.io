<?php
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Admin_Name = mysqli_real_escape_string($link, $_REQUEST['Admin_Name']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$Contact_Number = mysqli_real_escape_string($link, $_REQUEST['Contact_Number']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
?>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE user_login SET Admin_Name='$Admin_Name', username='$username', Contact_Number='$Contact_Number', Email='$Email' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
