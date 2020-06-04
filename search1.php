<?php 
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$RF=$_POST['Reference_no'];
$query = "SELECT * FROM courier where Reference_no='$RF'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);


  $oldR = $data['Remark'];
  $oldS = $data['statuss'];
  $oldT = $data['Timee'];


$date = new DateTime('now', new DateTimeZone('Asia/kolkata'));
$count=1;
$str = "<h5><?php $count++?></h5>";
$stringR = $oldR . $str . $_POST['Remark'];
$stringS = $oldS . $str . $_POST['statuss'];
$stringT = $oldT . $str . $date->format('d-m-Y h:i:sa');


echo "<style >
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
<center><h1 class=b><u>COURIER HISTORY</u></h1>
<table>
  <tr>
    
    <th>Remark</th>
    <th>Status</th>
    <th>Time</th>
  </tr>";

echo "  
  <tr>
    
    <td>$stringR<br></td>
    <td>$stringS<br></td>
    <td>$stringT<br></td>
  </tr>";
echo "</table>";


if ($_POST['Remark'] != '') {
   $newS=$_POST['statuss']; 

  $query = "UPDATE courier SET Remark = '$stringR', statuss = '$stringS', Timee= '$stringT', Status='$newS' WHERE Reference_no=$RF";
  $final = mysqli_query($conn,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Take Action</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>

    <div class="container">
      <label for="Remark"><b>Staff Remark</b></label>
      <input type="text" placeholder="Enter Remark" name="Remark" required>

      <label for="statuss"><b>Choose a status:</label>

<select id="statuss" name=statuss required>
  <option value="Courier Pickup">Courier PickUp</option>
  <option value="Shipped">Shipped</option>
  <option value="Intranist">Intransit</option>
  <option value="Arrived at Destination">Arrived at destination</option>
  <option value="Out for Delivery">Out for Delivery</option>
  <option value="Delivered">Delivered</option>
</select>
      <button type="submit">Update</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

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

</body>
</html>




