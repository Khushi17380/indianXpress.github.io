<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<center><u><h2>COURIER VIEW</h2></u></center>
<?php
error_reporting(0);
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$client=$_POST['client'];
$f=$_POST['fromdate'];
$t=$_POST['todate'];


$sql = "SELECT id, Reference_no, Sender_Name, Recipient_Name, Courier_Date FROM courier where Sender_Name='$client'and courier_dare between '$f' and '$t'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   
    echo "
<table>
  <tr>
    <th>S.NO</th>
    <th>Reference Number</th>
    <th>Sender Name</th>
    <th>Recipient Name</th>
    <th>Courier Date</th>
    <th>Action</th>
  </tr>";
 $counter=1;

    while($row = $result->fetch_assoc()) {
echo "
  
  <tr>
    <th>$counter</th>
    <th>$row[Reference_no]</th>
    <td>$row[Sender_Name]</td>
    <td>$row[Recipient_Name]</td>
    <td>$row[Courier_Date]</td>
    <td><a href=fulldetail.php?id=$row[id]>View Detail</a></td>
  </tr>";
$counter++;
}
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
