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
<center><u><h2>BRANCH DETAIL</h2></u></center>
<?php
error_reporting(0);
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Branch_Name, Branch_Contact_no,Branch_Email FROM branches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   
    echo "
<table>
  <tr>
    <th>S.NO</th>
    <th>Branch Name</th>
    <th>Branch Contact Number</th>
    <th>Branch Email</th>
    <th>Action</th>
    <th>Delete</th>
  </tr>";
 $counter=1;

    while($row = $result->fetch_assoc()) {
echo "
  
  <tr>
    <th>$counter</th>
    <th>$row[Branch_Name]</th>
    <td>$row[Branch_Contact_no]</td>
    <td>$row[Branch_Email]</td>
    <td><a href=managebranchphp.php?ID=$row[ID]>Edit</a></td>
    <td><a href=Deletebranch.php?ID=$row[ID];>Delete</a></td>
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
