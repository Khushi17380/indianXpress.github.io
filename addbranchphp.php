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
$Branch_Contact_no = mysqli_real_escape_string($link, $_REQUEST['Branch_Contact_no']);
$Branch_Email = mysqli_real_escape_string($link, $_REQUEST['Branch_Email']);
$Branch_Address = mysqli_real_escape_string($link, $_REQUEST['Branch_Address']);
$Branch_City = mysqli_real_escape_string($link, $_REQUEST['Branch_City']);
$Branch_State = mysqli_real_escape_string($link, $_REQUEST['Branch_State']);
$Branch_Pincode = mysqli_real_escape_string($link, $_REQUEST['Branch_Pincode']);
$Branch_Country = mysqli_real_escape_string($link, $_REQUEST['Branch_Country']);
 
// Attempt insert query execution
$sql = "INSERT INTO branches (Branch_Name, Branch_Contact_no, Branch_Email, Branch_Address, Branch_City, Branch_State, Branch_Pincode, Branch_Country) VALUES('$Branch_Name', '$Branch_Contact_no', '$Branch_Email', '$Branch_Address', '$Branch_City', '$Branch_State', '$Branch_Pincode', '$Branch_Country')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>