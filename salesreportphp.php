<?php
error_reporting(0);
 $counter=1;
$conn = new mysqli("localhost", "root", "", "mashlog_demo");
$f=$_POST['fromdate'];
$t=$_POST['todate'];
$dm=$_POST['money'];

/////////////////////////////////////
if ($dm==datewise) {
  # code...
$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t'";
$result = $conn->query($sql);
$ii=0;
$TotalAmount=0;
 if ($result->num_rows > 0) {
echo "
<center>
  <u><h2>SALES REPORT BETWEEN $f and $t</h2></u>
   <table border=2>
  <tr>
    <th>S.NO</th>
    <th>Date</th>
    <th>Sales Amount</th>
    </tr>";
while($row = $result->fetch_assoc()){
  $d[$ii++]=$row['courier_dare'];
  $TotalAmount=$TotalAmount+$row['Parcel_Price'];
}
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

    $sql = "SELECT * FROM courier WHERE courier_dare='$d[$i]'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    $Amount=0;
    
    while($row = $result->fetch_assoc()) {
       
  $Amount=$Amount+$row['Parcel_Price'];

      }
   
      
echo "
<tr>
  <th>$counter</th> 
  <th>$d[$i]</th>
  <td>$Amount</td>";
  $counter++;
}
}

echo "<h3>TotalAmount= $TotalAmount</h3>";

}
else
echo "0 Result";
}
//month..........................................................................................................

else{
 
$sql = "SELECT * FROM courier WHERE courier_dare between '$f' and '$t'";
$result = $conn->query($sql);
$ii=0;
$jj=0;
$pp=0;
$kk=0;
$qq=0;
$TotalAmount=0;
if ($result->num_rows > 0) {
echo "
<center>
  <u><h2>SALES REPORT BETWEEN $f and $t</h2></u>
   <table border=2>
  <tr>
    <th>S.NO</th>
    <th>Date</th>
    <th>Sales Amount</th>
    </tr>";
while($row = $result->fetch_assoc()){
  $d[$ii++]=$row['courier_dare'];
  $TotalAmount=$TotalAmount+$row['Parcel_Price'];
  $time[$jj++]=strtotime($d[$pp++]);
  $monthyear[$kk++]=date("m-Y",$time[$qq++]);
}
$n=sizeof($monthyear);
for($i = 0; $i < $n; $i++)
    {
        for($j = $i+1; $j < $n; )
        {
            if($monthyear[$j] == $monthyear[$i])
            {
                for($k = $j; $k < $n; $k++)
                {
                    $monthyear[$k] = $monthyear[$k+1];
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

$sql = "SELECT * FROM courier WHERE monthyear='$monthyear[$i]'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    $Amount=0;
    
    while($row = $result->fetch_assoc()) {
       
  $Amount=$Amount+$row['Parcel_Price'];

      }
   
      
echo "
<tr>
  <th>$counter</th> 
  <th>$monthyear[$i]</th>
  <td>$Amount</td>";
  $counter++;
  }
  }
  echo "<h3>TotalAmount= $TotalAmount</h3>";
}

else
echo "0 Result";


//end of else...................................
}
?>