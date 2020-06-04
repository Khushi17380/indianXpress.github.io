<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Dashboard</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>TOTAL COURIER</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier";
 
$connStatus = $conn->query($sql);
 
$numberOfRows1 = mysqli_num_rows($connStatus);
 
echo "<b>$numberOfRows1</b>";
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Courier PickedUp</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Courier Pickup'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo $numberOfRows2; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Shipped</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Shipped'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows3 = mysqli_num_rows($connStatus);
 
echo $numberOfRows3; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Intransit</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Intransit'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows4 = mysqli_num_rows($connStatus);
 
echo $numberOfRows4; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Arrived at Destination</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Arrived at destination'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows5 = mysqli_num_rows($connStatus);
 
echo $numberOfRows5; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Out for Delivery</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Out for Delivery'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows6 = mysqli_num_rows($connStatus);
 
echo $numberOfRows6; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    
    </div>
  </div>
<div class="column">
    <div class="card">
      <h3>Delivered</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='Delivered'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows7 = mysqli_num_rows($connStatus);
 
echo $numberOfRows7; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Not Picked up yet</h3>
      <?php
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
 
$sql = "SELECT * FROM courier WHERE Status='not picked up yet'";
 
$connStatus = $conn->query($sql);
 
$numberOfRows8 = mysqli_num_rows($connStatus);
 
echo $numberOfRows8; 
//this echo out the total number of rows returned from the query
 
$conn->close();
?>
    
    </div>
  </div>
</div>

</body>
</html>
