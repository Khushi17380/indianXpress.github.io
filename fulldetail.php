<!DOCTYPE html>
<html>
<head>
	<title>full detail</title>
<style >
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
h1.b {
  margin-top: 50px;
}
.submit {
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
<body>
	<?php
	header("refresh: 40");
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$id=$_GET['id'];
$query = "SELECT * FROM courier where id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
echo "<h2>COURIER VIEW</h2>";
 echo "<h3>Reference Number: ".$data['Reference_no']."<br/>";
echo "Courier Date: " .$data['Courier_Date']."</h3><br/>";
echo "
<table>
  <tr>
    <th colspan=2><center><h2><u>SENDER DETAIL</u></h2></center></th>
    <th colspan=2><center><h2><u>RECIPIENT DETAIL</u></h2></center></th>
  </tr>
  <tr>
    <td><label><h4>Sender Branch:</h4></label></td>
    <td>$data[Sender_Branch]</td>
    <td><h4>Shipment No.:</h4></td>
    <td>$data[Shipment_No]</td>
  </tr>
  <tr>
    <td><label><h4>Sender Name:</label></h4></td>
    <td>$data[Sender_Name]</td>
    <td><label><h4>Recipient Name:</h4></label></td>
    <td>$data[Recipient_Name]</td>
  </tr>
  <tr>
    <td><label><h4>Sender Contact Number:</label></h4></td>
    <td>$data[Sender_Contact_no]</td>
    <td><label><h4>Recipient Contact Number:</h4></label></td>
    <td>$data[Recipient_Contact_no]</td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Email:</label></h4></td>
    <td>$data[Sender_Email]</td>
    <td><label><h4>Recipient Email:</h4></label></td>
    <td>$data[Recipient_Email]</td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Address:</label></h4></td>
    <td>$data[Sender_Address]</td>
    <td><label><h4>Recipient Address:</h4></label></td>
    <td>$data[Recipient_Address]</td>
  </tr>
  
  <tr>
    <td><label><h4>Sender City:</label></h4></td>
    <td>$data[Sender_City]</td>
    <td><label><h4>Recipient City:</h4></label></td>
    <td>$data[Recipient_City]</td>
  </tr>
  
  <tr>
    <td><label><h4>Sender State:</label></h4></td>
    <td>$data[Sender_State]</td>
    <td><label><h4>Recipient State:</h4></label></td>
    <td>$data[Recipient_State]</td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Pincode:</label></h4></td>
    <td>$data[Sender_Pincode]</td>
    <td><label><h4>Recipient Pincode:</h4></label></td>
    <td>$data[Recipient_Pincode]</td>
  </tr>
  <tr>
    <td><label><h4>Sender Country:</label></h4></td>
    <td>$data[Sender_Country]</td>
    <td><label><h4>Recipient Name:</h4></label></td>
    <td>$data[Recipient_Country]</td>
  </tr>
  
</table>
<center><h1 class=b><u>COURIER DETAIL</u></h1>
</header>
<table>
  <tr>
    <th>Courier Description</th>
    <td>$data[Courier_Description]</td> 
  </tr>
  <tr>
    <th>Parcel weight(in kg)</th>
    <td>$data[Parcel_weight_in_kg]</td>
  </tr>
  <tr>
    <th>Parcel Dimension(in inch)</th>
    <td>$data[Parcel_Dimension_in_inch_L] X $data[Parcel_Dimension_in_inch_B] X $data[Parcel_Dimension_in_inch_H]</td>
  </tr>
  <tr>
    <th>Volumetric weight in surface(in kg)</th>
    <td>$data[V_weight_in_surface_in_kg]</td>
  </tr>
  <tr>
    <th>Volumetric weight in air(in kg)</th>
    <td>$data[V_weight_in_air_in_kg]</td>
  </tr>
  <tr>
    <th>Parcel Price</th>
    <td>$data[Parcel_Price]</td>
  </tr>
  <tr>
    <th>Status</th>
    <td>$data[Status]</td>
  </tr>
  <tr>
    <th>Destination</th>
    <td>$data[Destination]</td>
  </tr>
</table>";




$conn->close();
include('courier.php');
include('image.php');
?>

