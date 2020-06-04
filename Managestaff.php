<style >
  .text {
width:20%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px

}

.submit {
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:20%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
</style>

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
<center><u><h2>STAFF VIEW</h2></u></center>
<?php
header("refresh:3");
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Branch_Name, username, Staff_Mobile_no, Status FROM slogin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   
    echo "
<table>
  <tr>
    <th>S.NO</th>
    <th>Branch Name</th>
    <th>Staff Name</th>
    <th>Staff Number</th>
    <th>Edit</th>
    <th>Status</th>
  </tr>";
 $counter=1;

    while($row = $result->fetch_assoc()) {
echo "
  
  <tr>
    <th>$counter</th>
    <th>$row[Branch_Name]</th>
    <td>$row[username]</td>
    <td>$row[Staff_Mobile_no]</td>
    <td><a href=Editstaff.php?id=$row[id]>Edit</a></td>
    <td><a href=Managestaffphp.php?id=$row[id]>$row[Status]</a></td>
         


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

