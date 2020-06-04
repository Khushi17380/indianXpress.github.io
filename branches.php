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


<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<center><u><h2>BRANCH DETAILS</h2></u></center>
<?php
error_reporting(0);
$servername = "localhost";
$username = "username";
$password = "password";
$database = "mashlog_demo";
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Branch_Name, Branch_Contact_no, Branch_Email, Branch_Address, Branch_City, Branch_State, Branch_Pincode, Branch_Country FROM branches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "
    <div class=container>
    <div class=table-responsive-sm>    
  <table class=table table-bordered>

  <tr>
    <th>S.NO</th>
    <th>Branch_Name</th>
    <th>Branch_Contact_no</th>
    <th>Branch_Email</th>
    <th>Branch_Address</th>
    <th>Branch_City</th>
    <th>Branch_State</th>
    <th>Branch_Pincode</th>
    <th>Branch_Country</th>
  </tr>";
$counter=1;
    while($row = $result->fetch_assoc()) {
echo "
  
  <tr>
    <th>$counter</th>
    <th>$row[Branch_Name]</th>
    <td>$row[Branch_Contact_no]</td>
    <td>$row[Branch_Email]</td>
    <td>$row[Branch_Address]</td>
    <td>$row[Branch_City]</td>
    <td>$row[Branch_State]</td>
    <td>$row[Branch_Pincode]</td>
    <td>$row[Branch_Country]</td>
  </tr>";
  $counter++;
}

echo "</table>
</div>
</div>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
