<!DOCTYPE html>
<html>
<head>
	<title>Make a receipt</title>
</head>
<body>
     <center><h1>Make a Receipt</h1>
     <div class="containner">
     	<form action="receipt.php" method="post">
     		<input type="text" name="receipt" class="text" placeholder="Enter receipt number...">
     		<input type="submit" name="search" class="submit">
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