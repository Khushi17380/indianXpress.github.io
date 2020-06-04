<?php
include('authenn_login.php');
?>
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
  <button class="dropbtn">Staff Profile</button>
  <div class="dropdown-content">
  <a href="EditStaffOwn.php"><p style="color:blue;">Change Profile</p></a>
  <a href="ChangeSPass.php"><p style="color:blue;">Change Password</p></a>
  </div>
</div>
  <h1 style="color:red";>STAFF PANNEL</h1>
  <a href="StaffPanel.php?page=Dashboard">Dashboard</a>
     <div id="demo"> <a href="StaffPanel.php?page=addcourier">Add Courier</a></div>
     <div id="demo"> <a href="StaffPanel.php?page=managecourier">Manage Courier</a>

     </div>
  
  <div class="subnav">
    <button class="subnavbtn">Status<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="StaffPanel.php?page=statuscouriers">Courier</a>
      <a href="StaffPanel.php?page=CourierPickedUP">Courier Pickup</a>
      <a href="StaffPanel.php?page=Shipped">Shipped</a>
      <a href="StaffPanel.php?page=Intransit">Intranist</a>
      <a href="StaffPanel.php?page=Arrived">Arrivied at Destination</a>
      <a href="StaffPanel.php?page=out"><u>Out of Delivery</u></a>
      <a href="StaffPanel.php?page=Delivered">Delivered</a>
      <a href="StaffPanel.php?page=notpickedupyet">Not Picked up</a>
    </div>
  </div>


  <div class="subnav">
    <button class="subnavbtn">Search Courier<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="StaffPanel.php?page=SearchName">Search Courier by Name</a>
     <a href="StaffPanel.php?page=searchcourier">Search Courier by RF</a>   
</div>
</div>


<a href="StaffPanel.php?page=BILLsearch">BILL</a>
</div>
<a href="AdminLogout.php">Logout</a>
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

