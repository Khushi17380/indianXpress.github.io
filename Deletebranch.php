<?php
error_reporting(0);
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['ID'];
// sql to delete a record
$sql = "DELETE FROM branches WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
