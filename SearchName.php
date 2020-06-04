<!DOCTYPE html>
<html>
<head>
	<title>Search By Client Name</title>
</head>
<body>
     <center><h1>SEARCH BY CLIENT NAME</h1>
     <div class="containner">
     	<form action="SearchNamephp.php" method="post">

     		<label for="client"><b>Client Name:</b></label>
     		<input type="text" name="client" class="text" placeholder="Enter Client Name"><br>


     		<label for="fromdate"><b>From Date:</b></label>
            <input type="date" id="fromdate" name="fromdate" class="text"><br>


            	<label for="todate"><b>To Date:</b></label>
            <input type="date" id="todate" name="todate" class="text"><br>


     		<input type="submit" name="search" class="submit" value="SEARCH">
     	</form>

     </div>
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
</style>