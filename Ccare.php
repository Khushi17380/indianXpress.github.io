<?php 
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$RF=$_POST['Reference_no'];
$query = "SELECT * FROM courier where Reference_no='$RF' or Shipment_No='$RF'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
if ($result->num_rows > 0) {
    // output data of each row
  
echo "<h3>Reference_no: $data[Reference_no] <br> Shipment_No: $data[Shipment_No]</h3><br>";

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
    <td>$data[Remark]<br></td>
    <td>$data[statuss]<br></td>
    <td>$data[Timee]<br></td>
  </tr>";
echo "</table>";
}
else{
  echo "<h2>Reference Number not matched. Please Re-check.</h2>";
}
echo "<img src='imagesuploadedf/$data[Images]' width=50% height=60%;/>";

  ?>
