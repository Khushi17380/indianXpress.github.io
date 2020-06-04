<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.dropbtn {
  background-color: gold;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
}

.dropdown {
  position: relative;
  display: inline-block;
float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 16px 12px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
  padding: 40px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
  padding: 1%;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn">Admin Profile</button>
  <div class="dropdown-content">
  <a href="EditAdmin.php"><p style="color:blue;">Change Profile</p></a>
  <a href="ChangeAPass.php"><p style="color:blue;">Change Password</p></a>
  </div>
</div>
  <h1 style="color:red";>ADMIN PANNEL</h1>
 <a href="AdminPanel.php?page=Dashboard">Dashboard</a>
  <div class="subnav">
    <button class="subnavbtn">Branches <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
     <div id="demo"> <a href="AdminPanel.php?page=addbranch">Add Branch</a>

     </div>


      <a href="AdminPanel.php?page=managebranch">Manage Branch</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">CMS Staff <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="AdminPanel.php?page=Addstaff">Add Staff</a>
      <a href="AdminPanel.php?page=Managestaff"><u>Manage Staff</u></a>
    </div>
  </div> 
  
  <div class="subnav">
    <button class="subnavbtn">Courier <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="AdminPanel.php?page=statuscouriers">Courier</a>
      <a href="AdminPanel.php?page=CourierPickedUP">Courier Pickup</a>
      <a href="AdminPanel.php?page=Shipped">Shipped</a>
      <a href="AdminPanel.php?page=Intransit">Intranist</a>
      <a href="AdminPanel.php?page=Arrived">Arrivied at Destination</a>
      <a href="AdminPanel.php?page=out"><u>Out of Delivery</u></a>
      <a href="AdminPanel.php?page=Delivered">Delivered</a>
      <a href="AdminPanel.php?page=notpickedupyet">Not Picked up</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Reports <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="AdminPanel.php?page=ReportBTW">Between Dates</a>
      <a href="AdminPanel.php?page=Requestcount"><u>Request counts</u></a>
      <a href="AdminPanel.php?page=salesreport">Sales Reports</a>
    </div>

</div>
<a href="AdminPanel.php?page=BILLsearch">BILL</a>

<a href="AdminPanel.php?page=barcode">Make receipt</a>

</div>



<a class="nav-link" href="AdminLogout.php">Logout<span class="sr-only"></span></a>
<div id="content">
  <?php
  error_reporting(0);
  if($_GET['page'])
  {
    $page=$_GET['page'];
    $display=$page.'.php';
    include($display);
  }
  else{
  include("Dashboard.php");
};
?>
</div>
</body>
</html>

