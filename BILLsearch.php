<!DOCTYPE html>
<html>
<head>
  <title>Search for bill</title>
</head>
<body>
     <center><u><h1>MAKE A BILL</h1></u>
     <div class="containner">
      <form action="BILLsearchSuccess.php" method="post">

        <table>
          <tr>
            <th><label for="senderName"><b>Sender Name:</b></label></th>
            <th><input type="text" name="Sender_Name" class="text" placeholder="Enter Sender Name"><br></th>
          </tr>

          <tr>
            <th><label for="fromdate"><b>From Date:</b></label></th>
            <th><input type="date" id="fromdate" name="fromdate" class="text"><br></th>
          </tr>

          <tr>
            <th><label for="todate"><b>To Date:</b></label></th>
            <th><input type="date" id="todate" name="todate" class="text"><br></th>
          </tr>

          <tr>
            <th><label for="invoice No"><b>Invoice NUMBER:</b></label></th>
            <th> <input type="text" id="invoice" name="invoice" class="text" value=""><br></th>
          </tr>

          <tr>
            <th><label for="gstno"><b>GST NUMBER:</b></label></th>
            <th><input type="text" id="gstno" name="gstno" class="text" value=""><br></th>
          </tr>
        </table>
        //////////////////////////////////////////////////////////////////////////////////
<h2>Enter Taxes</h2>
<table>
  <tr>
            <th><label for="DFS"><b>DFS(Fuel Charges)%:</b></label></th>
            <th><input type="text" id="DFS" name="DFS" class="text" value="0"><br></th>
          </tr>

          <tr>
            <th><label for="other"><b>Other Charges%:</b></label></th>
            <th><input type="text" id="other" name="other" class="text" value="0"><br></th>
          </tr>

          <tr>
            <th><label for="CGST"><b>CGST%:</b></label></th>
            <th> <input type="text" id="CGST" name="CGST" class="text" value="0"><br></th>
          </tr>

          <tr>
            <th><label for="SGST"><b>SGST%:</b></label></th>
            <th><input type="text" id="SGST" name="SGST" class="text" value="0"><br></th>
          </tr>
</table>
     
   <input type="checkbox" name="v1" value="Courier_dare" checked>
   <label for="v1">Date</label>


  <input type="checkbox" name="v2" value="Reference_no" checked>
  <label for="v2">Reference NO.</label>

  <input type="checkbox" name="v3" value="Courier_Description" checked>
  <label for="v3">Courier Description</label>

  <input type="checkbox" name="v4" value="Destination" checked>
  <label for="v4">Destination</label>

  <input type="checkbox" name="v5" value="Parcel_weight_in_kg" checked>
  <label for="v5">Weight</label>

  <input type="checkbox" name="v6" value="V_weight_in_surface_in_kg" checked>
  <label for="v6">Ch.Weight(s)</label>

   <input type="checkbox" name="v7" value="V_weight_in_air_in_kg" checked>
  <label for="v7">Ch.Weight(a)</label>

  <input type="checkbox" name="v8" value="Status" checked>
  <label for="v8">Status</label>


  <input type="checkbox" name="v9" value="Parcel_Price" checked>
  <label for="v9">Amount</label><br>

        <input type="submit" name="search" class="submit" value="MAKE A BILL"><br><br>
</div>
      </form>
 </center>
</body>
</html>
<style >
  .text {
width:50%;
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
width:50%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
</style>