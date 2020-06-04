<?php
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_REQUEST['id']);
 
$Branch_Name = mysqli_real_escape_string($link, $_REQUEST['Branch_Name']);
$Staff_Name = mysqli_real_escape_string($link, $_REQUEST['Staff_Name']);
$Staff_Mobile_no = mysqli_real_escape_string($link, $_REQUEST['Staff_Mobile_no']);
$Staff_Email = mysqli_real_escape_string($link, $_REQUEST['Staff_Email']);
?>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE slogin SET Branch_Name='$Branch_Name', username='$Staff_Name', Staff_Mobile_no='$Staff_Mobile_no', Staff_Email='$Staff_Email' WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
