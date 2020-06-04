<?php
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Current_Password = mysqli_real_escape_string($link, $_REQUEST['Current_Password']);
$New_Password = mysqli_real_escape_string($link, $_REQUEST['New_Password']);
$Confirm_Password = mysqli_real_escape_string($link, $_REQUEST['Confirm_Password']);
?>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM user_login where id=1";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
if ($Current_Password==$data['Password'] and $New_Password==$Confirm_Password) {
$sql = "UPDATE user_login SET Password='$New_Password' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Password updated successfully</h2>";
} else {
    echo "Error updating record: " . $conn->error;
}


}
else{
	echo "<h2>Password not Matched</h2>";
}
$conn->close();
?>
