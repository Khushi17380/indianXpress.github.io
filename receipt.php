<?php
$RE=$_POST['receipt'];
?>
<!DOCTYPE html>
<html>
<head>
  
  
<link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  height: 100px;
}


</style>
</head>
<body>
  <div class="container">
<div class="table-responsive-sm">  
<table class="table table-bordered">
  <tr>
    <td><img src="indian.png" width="90%"><br>Contact No.:<b><u>+91 7408882444</u></b><br>E-Mail:<b><u>ixps9173@rediffmail.com</u></b></td>
    <td><p style="font-family:'Libre Barcode 39';font-size: 80px;"><?php echo"$RE";?></p><br><?php echo"<h3>**$RE**</h3>";?></td>
  </tr>

  <tr>
    <td><h5>CONSIGOR:</h5><br></td>
    <td><h5>CONSIGNEE:</h5></td>
    <td><h5>ORIGIN:&nbsp&nbsp&nbsp&nbsp<br><br><br></h5></td>
    <td><h5>DESTINATION:<br><br><br></h5></td>
  </tr>
  
  <tr>
    <td colspan="2"><b>If not covered by special risk subcharges, claim value on this shipper shall in no circumstances exceed Rs. 2000/-(Rupees Two Thousand Only) For Parcles and Rs. 100/-(Rupees One Hundred Only) For Packet of Documents.<u>(TERMS & CONDITION APPLIED)</u></b></td>
    <td><h5>DOX/N.DOX<br><br><br></h5></td>
    <td><h5>PCS:<br><br><br></h5></td>
  </tr>
   <tr>
    <td><h5><u>Shippers Copy</u><br>
      Received by IXPS<br>
      DATE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  TIME:<h5></td>
      <td><h5>Air/Surface:<h5></td>
    <td><h5>Weight:<br><br><br></h5></td>
    <td><h5>Courier Charges:<br><br><br></h5></td>
  </tr>

  <tr>
    <td><h5>I warrant that all details given here in are true and correct. I accept the terms of carriage.<br><br><br><b>Sender's Signature:<b><h5></td>
    <td><h5>Received pkt(s)/Parcel(s) in order & good condition.<br><br><b>Name:</b><br>(Please affix your stamp)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Signature:</b><br>
      <b>Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   Time:</b><h5></td>
    <td><h5>Risk Subcharges:<br><br><br></h5></td>
    <td><h5>GST:<br>
    <b>Total:</b><br><br> 
    CASH:___<br>
    CRIDIT:___<br>
    TO PAY:____</h5></td>
  </tr>

</table>
</body>
</html>
