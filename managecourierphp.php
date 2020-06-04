<?php
$connn = mysqli_connect('localhost', 'root', '');
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$id=$_GET['id'];
$query = "SELECT * FROM courier where id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>

.input {
width:90%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
.inputt {
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
width:90%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
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


</style>
</head>
<body>
<form action="Editcourier.php" method="POST">

<input class="input" name="id" type="hidden" value="<?php echo $data['id'];?>">

<center><label><h3>Reference Number:</h3></label>
    <input class="input" name="Reference_no" type="text" value="<?php echo $data['Reference_no'];?>"></center>

<table style="width:100%">
  <tr>
    <th colspan="2"><center><h2><u>SENDER DETAIL</u></h2></center></th>
    <th colspan="2"><center><h2><u>RECIPIENT DETAIL</u></h2></center></th>
  </tr>
  <tr>
    <td><label><h4>Sender Branch:</h4></label></td>
    <td><input class="input" name="Sender_Branch" type="text" value="<?php echo $data['Sender_Branch'];?>"></td>
    <td><label><h4>Shipment Number:</h4></label></td>
    <td><input class="input" name="Shipment_No" type="text" value="<?php echo $data['Shipment_No'];?>"></td>
  </tr>
  <tr>
    <td><label><h4>Sender Name:</label></h4></td>
    <td><input class="input" name="Sender_Name" type="text" value="<?php echo $data['Sender_Name'];?>"></td>
    <td><label><h4>Recipient Name:</h4></label></td>
    <td><input class="input" name="Recipient_Name" type="text" value="<?php echo $data['Recipient_Name'];?>"></td>
  </tr>
  <tr>
    <td><label><h4>Sender Contact Number:</label></h4></td>
    <td><input class="input" name="Sender_Contact_no" type="text" value="<?php echo $data['Sender_Contact_no'];?>"></td>
    <td><label><h4>Recipient Contact Number:</h4></label></td>
    <td><input class="input" name="Recipient_Contact_no" type="text" value="<?php echo $data['Recipient_Contact_no'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Email:</label></h4></td>
    <td><input class="input" name="Sender_Email" type="text" value="<?php echo $data['Sender_Email'];?>"></td>
    <td><label><h4>Recipient Email:</h4></label></td>
    <td><input class="input" name="Recipient_Email" type="text" value="<?php echo $data['Recipient_Email'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Address:</label></h4></td>
    <td><textarea cols="55" name="Sender_Address" rows="5"><?php echo $data['Sender_Address'];?></textarea><br></td>
    <td><label><h4>Recipient Address:</h4></label></td>
    <td><textarea cols="55" name="Recipient_Address" rows="5"><?php echo $data['Recipient_Address'];?></textarea><br></td>
  </tr>
  
  <tr>
    <td><label><h4>Sender City:</label></h4></td>
    <td><input class="input" name="Sender_City" type="text" value="<?php echo $data['Sender_City'];?>"></td>
    <td><label><h4>Recipient City:</h4></label></td>
    <td><input class="input" name="Recipient_City" type="text" value="<?php echo $data['Recipient_City'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Sender State:</label></h4></td>
    <td><input class="input" name="Sender_State" type="text" value="<?php echo $data['Sender_State'];?>"></td>
    <td><label><h4>Recipient State:</h4></label></td>
    <td><input class="input" name="Recipient_State" type="text" value="<?php echo $data['Recipient_State'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Sender Pincode:</label></h4></td>
    <td><input class="input" name="Sender_Pincode" type="text" value="<?php echo $data['Sender_Pincode'];?>"></td>
    <td><label><h4>Recipient Pincode:</h4></label></td>
    <td><input class="input" name="Recipient_Pincode" type="text" value="<?php echo $data['Recipient_Pincode'];?>"></td>
  </tr>
  <tr>
    <td><label><h4>Sender Country:</label></h4></td>
    <td><input class="input" name="Sender_Country" type="text" value="<?php echo $data['Sender_Country'];?>"></td>
    <td><label><h4>Recipient Name:</h4></label></td>
    <td><input class="input" name="Recipient_Country" type="text" value="<?php echo $data['Recipient_Country'];?>"></td>
  </tr>
  
</table>
<center><h1 class="b"><u>COURIER DETAIL</u></h1>
</header>
<table>
  <tr>
    <th>Courier Description</th>
    <td><textarea cols="140" name="Courier_Description" rows="5"><?php echo $data['Courier_Description'];?></textarea><br></td> 
  </tr>
  <tr>
    <th>Parcel weight(in kg)</th>
    <td><input class="input" name="Parcel_weight_in_kg" type="text" value="<?php echo $data['Parcel_weight_in_kg'];?>"></td>
  </tr>
  <tr>
    <th>Parcel Dimension(in inch)</th>
    <td><input class="inputt" name="Parcel_Dimension_in_inch_L" type="text" value="<?php echo $data['Parcel_Dimension_in_inch_L'];?>" placeholder="Enter Length"> X <input class="inputt" name="Parcel_Dimension_in_inch_B" type="text" value="<?php echo $data['Parcel_Dimension_in_inch_B'];?>" placeholder="Enter Breadth"> X <input class="inputt" name="Parcel_Dimension_in_inch_H" type="text" value="<?php echo $data['Parcel_Dimension_in_inch_H'];?>" placeholder="Enter Height"></td>
  </tr>
  <tr>
    <th>Parcel Price</th>
    <td><input class="input" name="Parcel_Price" type="text" value="<?php echo $data['Parcel_Price'];?>"></td>
  </tr>
  <tr>
    <th>Destination</th>
    <td><input class="input" name="Destination" type="text" value="<?php echo $data['Destination'];?>"></td>
  </tr>
</table>
<center><input class="submit" name="submit" type="submit" value="Update"></center></a>

</form>
</body>
</html>
