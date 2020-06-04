<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
div.right{
  text-align: right;
}
</style>
<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$date = new DateTime('now', new DateTimeZone('Asia/kolkata'));
$Bill_Date =$date->format('Y-m-d');
$Payment_Date=date('Y-m-d', strtotime($Bill_Date. ' + 15 days'));


$SN=$_POST['Sender_Name'];
$f=$_POST['fromdate'];
$t=$_POST['todate'];
$invoice=$_POST['invoice'];
$gstno=$_POST['gstno'];
$p1=I;
$p2=I;
$p3=I;
$p4=I;
$p5=I;
$p6=I;
$p7=I;
$p8=I;
$p9=I;


$DFS=$_POST['DFS'];
$other=$_POST['other'];
$CGST=$_POST['CGST'];
$SGST=$_POST['SGST'];


if ($_POST['v1']=="Courier_dare") {
  $p1=$_POST['v1'];
  $pp1="Date";
}

if ($_POST['v2']=="Reference_no") {
  $p2=$_POST['v2'];
  $pp2="Reference_no";
}

if ($_POST['v3']=="Courier_Description") {
  $p3=$_POST['v3'];
  $pp3="Courier_Description";
}

if ($_POST['v4']=="Destination") {
  $p4=$_POST['v4'];
  $pp4="Destination";
}

if ($_POST['v5']=="Parcel_weight_in_kg") {
  $p5=$_POST['v5'];
  $pp5="weight(kg)";
}

if ($_POST['v6']=="V_weight_in_surface_in_kg") {
  $p6=$_POST['v6'];
  $pp6="Ch.weight(s)(kg)";
}

if ($_POST['v7']=="V_weight_in_air_in_kg") {
  $p7=$_POST['v7'];
  $pp7="Ch.weight(a)(kg)";
}

if ($_POST['v8']=="Status") {
  $p8=$_POST['v8'];
  $pp8="Status";
}

if ($_POST['v9']=="Parcel_Price") {
  $p9=$_POST['v9'];
  $pp9="Amount";
}


echo "
<h1>RB ENTERPRISES</h1>
<br>
Bussiness Assosiates-<b>TRACKON</b> COURIERS PVT.LTD.
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<b>Date:</b> $Bill_Date<br>
59 Guru Govind Marg Lucknow-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<b>Payment Due Date:</b>$Payment_Date<br>
GSTIN No- 09APOPS6852F1Z8<br>
<center><h2><u>COURIER STATEMENT</u><h2></center><br>
Invoice no- $invoice<br>
Period- <b>$f</b> to <b>$t</b><br>
Client Name- <b>$SN</b><br>
GST NUMBER- <u>$gstno</u><br><br>";
  echo "<table>
<tr>
<th>S.NO</th>
<th>Date</th>
<th>$pp2</th>
<th>$pp3</th>
<th>$pp4</th>
<th>$pp5</th>
<th>$pp6</th>
<th>$pp7</th>
<th>$pp8</th>
<th>$pp9</th>
</tr>";

$charges=0;
$Count=1;
$query = "SELECT $p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9 FROM courier where Sender_Name='$SN' and courier_dare between '$f' and '$t'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        
        $charges=$charges+$row[$p9];


    echo"
   <tr>
   <th>$Count</th>
   <th>$row[$p1]</th>
   <td>$row[$p2]</td>
   <td>$row[$p3]</td>
   <td>$row[$p4]</td>
   <td>$row[$p5]</td>
   ";
$surfaceW="";
if ($row[$p6]!=0) {
$surfaceW=round($row[$p6],2);
}
   echo"
   <td>$surfaceW</td>";
   $surfaceW="";
if ($row[$p7]!=0) {
$airW=round($row[$p7],2);
}

   echo"<td>$airW</td>
   <td>$row[$p8]</td>
   <td>$row[$p9]</td>
   </tr>
   ";
  $Count++;  
}

}
echo "</table>";
////////////////////////////////////charges

echo"<div class=right>
   
   <b>Courier Charges:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $charges</b><br>
   
   ";


/////////////////////////////////////////////////////////////////////////////////////////DFS
   $DFSAmount=($DFS/100)*$charges;

echo"
   
   DFS(Fuel Charge) $DFS%:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $DFSAmount
   <br>
   ";


/////////////////////////////////////////////////////////////////////////////////////////other charges
   $otherAmount=($other/100)*$charges;

echo"
   Other Charges $other%:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $otherAmount
   <br>
   ";



/////////////////////////////////////////////////////////////////////////////////////////Taxable Amount
   $TaxableAmount=$DFSAmount+$otherAmount+$charges;

echo"
   <b>Taxable Amount:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $TaxableAmount</b>
   <br>
   ";


   /////////////////////////////////////////////////////////////////////////////////////////CGST Amount
   $CGSTAmount=($CGST/100)*$TaxableAmount;

echo"
   CGST $CGST%:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $CGSTAmount
   <br>
   ";


/////////////////////////////////////////////////////////////////////////////////////////SGST Amount
   $SGSTAmount=($SGST/100)*$TaxableAmount;

echo"
   SGST $SGST%:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $SGSTAmount
   <br>
   ";


   /////////////////////////////////////////////////////////////////////////////////////////Chargable Amount
   $ChargableAmount=$SGSTAmount+$CGSTAmount+$TaxableAmount;

echo"
   Chargable Amount:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $ChargableAmount
   <br>
   ";
   

///////////////////Round Off Amount
   $Round=round($ChargableAmount);

   echo"
   <b>Round off Amount:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $Round.00</b>
   <br>
   ";
echo "</div>";

///////////////////////////////////////////////Amount in words
echo "<br><br>Rs-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>";
   $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $f->format($Round);
echo " Only</b></u><br><br>";
echo "For&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> R B Enterprises</b><br><br>";


echo"Terms & Conditions-<br><br>
1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Payment Due to receipt of this Bill.<br>
2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Make the payment within 7 days of submission of bill.<br>
3 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Late Payment Interested will charged 5% per month.<br>
4 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If goods are insured by senders a charges of FOV 0.2% (or Fixed Charges) per Shipment on decleared value shall be levied for  providing COF <br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (Certified of facts) in case of mishap.<br>
5 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No Claim shall be considered without Pay Risk Charges & Presentation Of Separate receipt issued for the risk charges by company/franchisee.";
?>



