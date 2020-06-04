<?php
$connn = mysqli_connect('localhost', 'root', '');
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}

$query = "SELECT * FROM user_login where id=1";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>

.input {
width:90%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
.inputt {
width:20%;
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
width:90%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
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
h1.b {
  margin-top: 50px;
}


</style>
</head>
<body>
<form action="ChangeAPassphp.php" method="POST">
<h2>ADMIN PASSWORD</h2>
<table style="width:100%">
  <tr>
    <td><label><h4>Current Password:</h4></label></td>
    <td><input class="input" name="Current_Password" type="Password" value="" required>

  </tr>
  <tr>
    <td><label><h4>New Password:</label></h4></td>
    <td><input class="input" name="New_Password" type="Password" value=""></td>
  </tr>
  <tr>
    <td><label><h4>Confirm Passsword:</label></h4></td>
    <td><input class="input" name="Confirm_Password" type="Password" value=""></td>
  </tr>
  
</table>
<center><input class="submit" name="submit" type="submit" value="Update"></center></a>

</form>

</body>
</html>
