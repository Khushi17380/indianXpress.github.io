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
<form action="EditAdminphp.php" method="POST">
<h2>ADMIN DETAIL</h2>
<table style="width:100%">
  <tr>
    <td><label><h4>Admin Name:</h4></label></td>
    <td><input class="input" name="Admin_Name" type="text" value="<?php echo $data['Admin_Name'];?>" required>

  </tr>
  <tr>
    <td><label><h4>User Name:</label></h4></td>
    <td><input class="input" name="username" type="text" value="<?php echo $data['username'];?>"></td>
  </tr>
  <tr>
    <td><label><h4>Contact Number:</label></h4></td>
    <td><input class="input" name="Contact_Number" type="text" value="<?php echo $data['Contact_Number'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Email:</label></h4></td>
    <td><input class="input" name="Email" type="text" value="<?php echo $data['Email'];?>"></td>
  </tr>
  
</table>
<center><input class="submit" name="submit" type="submit" value="Update"></center></a>

</form>

</body>
</html>
