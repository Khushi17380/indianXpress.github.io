<?php 
session_start();  
?>
<!DOCTYPE html>
<html>

<body>

<?php
require_once('dbb_connect.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
  
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `slogin` WHERE Username='$username' and Password='$password' and Status='Active'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

$row=mysqli_fetch_assoc( $result );
$id=$row['id'];

if ($count == 1){
	$_SESSION['id'] = $id;
//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header('Location:StaffPanel.php');
}
else{

$query1 = "SELECT * FROM `slogin` WHERE Username='$username' and Password='$password'";
$result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
$count1 = mysqli_num_rows($result1);
if ($count1 == 1){

echo "<h2>Your Account is Blocked</h2>";
}
else{
	echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
	
}
}
}
?>

</body>
</html>