<?php 
header("refresh: 3"); 
$conn = mysqli_connect("localhost","root","","mashlog_demo");
$query = "SELECT * FROM track";
$final = mysqli_query($conn,$query);
while ($result = mysqli_fetch_assoc($final)) {
	$old = $result['place'];
}
$data = explode(',', $old);
$ctr = 0;
foreach ($data as $key) {
	$ctr++;
	echo $key;
	echo "<br>";
	
	if ($ctr != sizeof($data)) {
		echo '<img src="https://media.giphy.com/media/JmIrb7d6XH4B94cX6W/giphy.gif" width="50" style=margin-left:-5px>';
	echo "<br>";
	}
}
?>