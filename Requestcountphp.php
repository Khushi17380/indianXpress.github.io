<?php
error_reporting(0);
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
$f=$_POST['fromdate'];
$t=$_POST['todate'];
$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t'";
$result = $conn->query($sql);
$ii=0;
 if ($result->num_rows > 0) {
echo "
<center>
  <u><h2>COUNT REPORT BETWEEN $f and $t</h2></u>
   <table border=2>
  <tr>
    <th>S.NO</th>
    <th>Courier Listed</th>
    <th>Not Pickrd up yet</th>
    <th>Courier Pickup</th>
    <th>Shipped</th>
    <th>Intransit</th>
    <th>Arrived at Destination</th>
    <th>Out for Delivery</th>
    <th>Delivered</th>
    </tr>";
while($row = $result->fetch_assoc()){
$d[$ii++]=$row['courier_dare'];}
$n=sizeof($d);
for($i = 0; $i < $n; $i++)
    {
        for($j = $i+1; $j < $n; )
        {
            if($d[$j] == $d[$i])
            {
                for($k = $j; $k < $n; $k++)
                {
                    $d[$k] = $d[$k+1];
                }
                $n--;
            }
            else
            {
                $j++;
            }
        }
    }
  

     for($i = 0; $i < $n; $i++)
    {
echo "
<tr>
  <th>$d[$i]</th>";


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]'";
$connStatus = $conn->query($sql);
 
$numberOfRows1 = mysqli_num_rows($connStatus);
 
echo "
<td>$numberOfRows1</td>";


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='not picked up yet'";
$connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows2</td>"; 


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Courier Pickup'";
$connStatus = $conn->query($sql);
 
$numberOfRows3 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows3</td>"; 

$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Shipped'";
$connStatus = $conn->query($sql);
 
$numberOfRows4 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows4</td>";

$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Intransit'";
$connStatus = $conn->query($sql);
 
$numberOfRows3 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows3</td>"; 


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Arrived at Destination'";
$connStatus = $conn->query($sql);
 
$numberOfRows4 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows4</td>"; 


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Out for Delivery'";
$connStatus = $conn->query($sql);
 
$numberOfRows4 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows4</td>"; 


$sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]' AND Status='Delivered'";
$connStatus = $conn->query($sql);
 
$numberOfRows4 = mysqli_num_rows($connStatus);
echo "
<td>$numberOfRows4</td>"; 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
}

//---------------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL COURIER</b>-$numberOfRows2<br>"; 
}


$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Shipped'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL SHIPPED</b>-$numberOfRows2<br>"; 
}



$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Arrived at Destination'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL ARRIVED AT DESTINATION</b>-$numberOfRows2<br>"; 
}


$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Intransit'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL INTRANSIT</b>-$numberOfRows2<br>"; 
}



$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='not picked up yet'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL NOT PICK UP</b>-$numberOfRows2<br>"; 
}



$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Courier Pickup'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL COURIER PICKUP</b>-$numberOfRows2<br>"; 
}



$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Out for Delivery'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL OUT FOR DELIVERY</b>-$numberOfRows2<br>"; 
}




$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t' AND Status='Delivered'";
 
if($sql)
{
  $connStatus = $conn->query($sql);
 
$numberOfRows2 = mysqli_num_rows($connStatus);
 
echo "<b>*TOTAL DELIVERED</b>-$numberOfRows2<br>"; 
}
?>
