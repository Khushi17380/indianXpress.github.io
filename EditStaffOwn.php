<?php
session_start();
?>

<?php
// Create connection
$conn = mysqli_connect('localhost','root','','mashlog_demo');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM branches";
$result1 = $conn->query($sql);
    ?>



<?php
$connn = mysqli_connect('localhost', 'root', '');
$conn = mysqli_connect('localhost', 'root', '', 'mashlog_demo');
if (!$conn) {
die("Connection Failed");
}
$id=$_SESSION['id'];
$query = "SELECT * FROM slogin where id=$id";
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
<form action="Editstaffphp.php" method="POST">
<h2>STAFF DETAIL</h2>
<input class="input" name="id" type="hidden" value="<?php echo $data['id'];?>">
<table style="width:100%">
  <tr>
    <td><label><h4>Branch Name:</h4></label></td>
    <td><select id="Branch_Name" name="Branch_Name" class="input" value="<?php echo $data['Branch_Name'];?>" required>

      <?php
      if ($result1->num_rows > 0){
    // output data of each row
    while($row = $result1->fetch_assoc()){ 
    ?>
  <option value="<?php echo $row['Branch_Name'];?>"><?php echo $row['Branch_Name'];}}?></option>
</select>
</td>

  </tr>
  <tr>
    <td><label><h4>Staff Name:</label></h4></td>
    <td><input class="input" name="Staff_Name" type="text" value="<?php echo $data['username'];?>"></td>
  </tr>
  <tr>
    <td><label><h4>Staff Mobile Number:</label></h4></td>
    <td><input class="input" name="Staff_Mobile_no" type="text" value="<?php echo $data['Staff_Mobile_no'];?>"></td>
  </tr>
  
  <tr>
    <td><label><h4>Staff Email:</label></h4></td>
    <td><input class="input" name="Staff_Email" type="text" value="<?php echo $data['Staff_Email'];?>"></td>
  </tr>
  
</table>
<center><input class="submit" name="submit" type="submit" value="Update"></center></a>

</form>

</body>
</html>
