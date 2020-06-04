<?php
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($link, $_REQUEST['id']);

$Reference_no = mysqli_real_escape_string($link, $_REQUEST['Reference_no']);
$Shipment_No = mysqli_real_escape_string($link, $_REQUEST['Shipment_No']);

$Sender_Branch = mysqli_real_escape_string($link, $_REQUEST['Sender_Branch']);
$Sender_Name = mysqli_real_escape_string($link, $_REQUEST['Sender_Name']);
$Sender_Contact_no = mysqli_real_escape_string($link, $_REQUEST['Sender_Contact_no']);
$Sender_Email = mysqli_real_escape_string($link, $_REQUEST['Sender_Email']);
$Sender_Address = mysqli_real_escape_string($link, $_REQUEST['Sender_Address']);
$Sender_City = mysqli_real_escape_string($link, $_REQUEST['Sender_City']);
$Sender_State = mysqli_real_escape_string($link, $_REQUEST['Sender_State']);
$Sender_Pincode = mysqli_real_escape_string($link, $_REQUEST['Sender_Pincode']);
$Sender_Country = mysqli_real_escape_string($link, $_REQUEST['Sender_Country']);

$Recipient_Name = mysqli_real_escape_string($link, $_REQUEST['Recipient_Name']);
$Recipient_Contact_no = mysqli_real_escape_string($link, $_REQUEST['Recipient_Contact_no']);
$Recipient_Email = mysqli_real_escape_string($link, $_REQUEST['Recipient_Email']);
$Recipient_Address = mysqli_real_escape_string($link, $_REQUEST['Recipient_Address']);
$Recipient_City = mysqli_real_escape_string($link, $_REQUEST['Recipient_City']);
$Recipient_State = mysqli_real_escape_string($link, $_REQUEST['Recipient_State']);
$Recipient_Pincode = mysqli_real_escape_string($link, $_REQUEST['Recipient_Pincode']);
$Recipient_Country = mysqli_real_escape_string($link, $_REQUEST['Recipient_Country']);

$Courier_Description = mysqli_real_escape_string($link, $_REQUEST['Courier_Description']);
$Parcel_weight_in_kg = mysqli_real_escape_string($link, $_REQUEST['Parcel_weight_in_kg']);
$Parcel_Dimension_in_inch_L = mysqli_real_escape_string($link, $_REQUEST['Parcel_Dimension_in_inch_L']);
$Parcel_Dimension_in_inch_B = mysqli_real_escape_string($link, $_REQUEST['Parcel_Dimension_in_inch_B']);
$Parcel_Dimension_in_inch_H = mysqli_real_escape_string($link, $_REQUEST['Parcel_Dimension_in_inch_H']);
$V_weight_in_surface_in_kg=(($Parcel_Dimension_in_inch_L*$Parcel_Dimension_in_inch_B*$Parcel_Dimension_in_inch_H*2.54*2.54*2.54)/5000)*10;
$V_weight_in_air_in_kg=(($Parcel_Dimension_in_inch_L*$Parcel_Dimension_in_inch_B*$Parcel_Dimension_in_inch_H*2.54*2.54*2.54)/6000)*10;
$Parcel_Price = mysqli_real_escape_string($link, $_REQUEST['Parcel_Price']); 
$Destination = mysqli_real_escape_string($link, $_REQUEST['Destination']); 
?>

<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE courier SET Reference_no='$Reference_no', Shipment_No='$Shipment_No', Sender_Branch='$Sender_Branch', Sender_Name='$Sender_Name', Sender_Contact_no='$Sender_Contact_no', Sender_Email='$Sender_Email', Sender_Address='$Sender_Address', Sender_City='$Sender_City', Sender_State='$Sender_State', Sender_Pincode='$Sender_Pincode', Sender_Country='$Sender_Country', Recipient_Name='$Recipient_Name', Recipient_Contact_no='$Recipient_Contact_no', Recipient_Email='$Recipient_Email', Recipient_Address='$Recipient_Address', Recipient_City='$Recipient_City', Recipient_State='$Recipient_State', Recipient_Pincode='$Recipient_Pincode', Recipient_Country='$Recipient_Country', Courier_Description='$Courier_Description', Parcel_weight_in_kg='$Parcel_weight_in_kg', Parcel_Dimension_in_inch_L='$Parcel_Dimension_in_inch_L', Parcel_Dimension_in_inch_B='$Parcel_Dimension_in_inch_B', Parcel_Dimension_in_inch_H='$Parcel_Dimension_in_inch_H', V_weight_in_surface_in_kg='$V_weight_in_surface_in_kg', V_weight_in_air_in_kg='$V_weight_in_air_in_kg',  Parcel_Price='$Parcel_Price', Destination='$Destination' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
 