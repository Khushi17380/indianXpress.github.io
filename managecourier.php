<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <center>
     <h4>SEARCH BY REFERENCE NUMBER OR SHIPMENT NUMBER</h4>
     <div class="containner">
      <form action="managesearchcourier.php" method="post">
        <input type="text" name="Reference_no" class="text" placeholder="Enter Reference Number or Shipment Number">
        <input type="submit" name="search" class="submit" value="SEARCH">
      </form>

     </div>
   </center>
</body>
</html>
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
<center><u><h2>COURIER VIEW</h2></u></center>
<?php
error_reporting(0);
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Reference_no, Sender_Name, Recipient_Name, Courier_Date FROM courier";
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
    <th>Delete</th>
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
    <td><a href=managecourierphp.php?id=$row[id]>Update</a></td>
    <td><a href=Deletecourier.php?id=$row[id]>Delete</a></td>
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

