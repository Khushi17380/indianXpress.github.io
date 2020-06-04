<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$id=$_GET['id'];
$query = "SELECT * FROM slogin where id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
$Status=$data[Status];
if($Status=='Active')
{
    $sql = "UPDATE slogin SET Status='Inactive' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
    echo "<center><h2>Account is Inactivated</h2></center>";
} else {
    echo "Error updating record: " . $conn->error;
}
  }
else
{
    $sql = "UPDATE slogin SET Status='Active' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
    echo "<center><h2>Account is Activated</h2></center>";
} else {
    echo "Error updating record: " . $conn->error;
}
}


$conn->close();
?> 