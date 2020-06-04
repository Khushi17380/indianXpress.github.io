<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Branch_Name = mysqli_real_escape_string($link, $_REQUEST['Branch_Name']);
$Staff_Name = mysqli_real_escape_string($link, $_REQUEST['Staff_Name']);
$Staff_Mobile_no = mysqli_real_escape_string($link, $_REQUEST['Staff_Mobile_no']);
$Staff_Email = mysqli_real_escape_string($link, $_REQUEST['Staff_Email']);
$Staff_Password = mysqli_real_escape_string($link, $_REQUEST['Staff_Password']);

// Attempt insert query execution
$sql = "INSERT INTO slogin (Branch_Name, username, Staff_Mobile_no, Staff_Email, Password) VALUES('$Branch_Name', '$Staff_Name', '$Staff_Mobile_no', '$Staff_Email', '$Staff_Password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>