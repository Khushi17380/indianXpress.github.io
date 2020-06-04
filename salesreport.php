<!DOCTYPE html>
<html>
<body>

<h1>Sales Report</h1>

<form action="salesreportphp.php" method="POST">
 <center> <label for="fromdate"><b>From Date:</b></label>
  <input type="date" id="fromdate" name="fromdate" class="input"></center><br>
 <center> <label for="todate"><b>To Date:</b></label>
  <input type="date" id="todate" name="todate" class="input"></center><br>


<center>
  <label for="money"><b>Request Type:</b></label>

<select id="money" name=money required>
  <option value="datewise">Date Wise</option>
  <option value="monthwise">Month Wise</option>
</select></center>
  <center><input type="submit" class="submit"></center>
</form>
</body>
</html>
<style>

.input {
width:40%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
select {
 width:40%;
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
width:40%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
</style>