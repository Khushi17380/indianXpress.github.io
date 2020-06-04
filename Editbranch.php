<?php
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
 
$Branch_Name = mysqli_real_escape_string($link, $_REQUEST['Branch_Name']);
$Branch_Contact_no = mysqli_real_escape_string($link, $_REQUEST['Branch_Contact_no']);
$Branch_Email = mysqli_real_escape_string($link, $_REQUEST['Branch_Email']);
$Branch_Address = mysqli_real_escape_string($link, $_REQUEST['Branch_Address']);
$Branch_City = mysqli_real_escape_string($link, $_REQUEST['Branch_City']);
$Branch_State = mysqli_real_escape_string($link, $_REQUEST['Branch_State']);
$Branch_Pincode = mysqli_real_escape_string($link, $_REQUEST['Branch_Pincode']);
$Branch_Country = mysqli_real_escape_string($link, $_REQUEST['Branch_Country']);
?>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE branches SET Branch_Name='$Branch_Name', Branch_Contact_no='$Branch_Contact_no', Branch_Email='$Branch_Email', Branch_Address='$Branch_Address', Branch_City='$Branch_City', Branch_State='$Branch_State', Branch_Pincode='$Branch_Pincode', Branch_Country='$Branch_Country' WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
