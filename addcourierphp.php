<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mashlog_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$date = new DateTime('now', new DateTimeZone('Asia/kolkata'));
$Courier_Date =$date->format('d-m-Y h:i:sa');
$courier_dare =$date->format('Y-m-d');
$monthyear =$date->format('m-Y');

$Status="not picked up yet";
$Remark="-";
$statuss="-";
$Timee="-";
$Images='-';

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


// Attempt insert query execution
$sql = "INSERT INTO courier (Courier_Date,courier_dare, monthyear, Reference_no,Shipment_No, Sender_Branch, Sender_Name, Sender_Contact_no, Sender_Email, Sender_Address, Sender_City, Sender_State, Sender_Pincode, Sender_Country, Recipient_Name, Recipient_Contact_no, Recipient_Email, Recipient_Address, Recipient_City, Recipient_State, Recipient_Pincode, Recipient_Country, Courier_Description, Parcel_weight_in_kg, Parcel_Dimension_in_inch_L, Parcel_Dimension_in_inch_B, Parcel_Dimension_in_inch_H, V_weight_in_surface_in_kg, V_weight_in_air_in_kg,  Parcel_Price, Status, Remark, statuss, Timee, Destination,I, Images) VALUES('$Courier_Date','$courier_dare','$monthyear', '$Reference_no','$Shipment_No', '$Sender_Branch', '$Sender_Name', '$Sender_Contact_no', '$Sender_Email', '$Sender_Address', '$Sender_City', '$Sender_State', '$Sender_Pincode', '$Sender_Country', '$Recipient_Name', '$Recipient_Contact_no', '$Recipient_Email', '$Recipient_Address', '$Recipient_City', '$Recipient_State', '$Recipient_Pincode', '$Recipient_Country', '$Courier_Description', '$Parcel_weight_in_kg', '$Parcel_Dimension_in_inch_L', '$Parcel_Dimension_in_inch_B', '$Parcel_Dimension_in_inch_H', '$V_weight_in_surface_in_kg', '$V_weight_in_air_in_kg', '$Parcel_Price', '$Status', '$Remark', '$statuss', '$Timee', '$Destination','', '$Images')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>