<?php 
error_reporting(0);
$conn = mysqli_connect("localhost","root","","mashlog_demo");
$query = "SELECT * FROM track";
$final = mysqli_query($conn,$query);
while ($result = mysqli_fetch_assoc($final)) {
	
	$old = $result['place'];
}


$str = ",";
$string = $old . $str . $_POST['city'];
echo $string;
if ($_POST['city'] != '') {

	$query = "UPDATE track SET place = '$string' WHERE id=3";
	$final = mysqli_query($conn,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
Enter the Current Location<input type="text" name="city">	
<button type="submit" name="">SUBMIT</button>
</form>

</body>
</html>