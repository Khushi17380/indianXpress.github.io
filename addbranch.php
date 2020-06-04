<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Branch Detail.</h2>
</div>
<form action="addbranchphp.php" method="POST">
<!-- Method can be set as POST for hiding values in URL-->
<label>Branch Name:</label>
<input class="input" name="Branch_Name" type="text" value="">
<label>Branch Contact Number:</label>
<input class="input" name="Branch_Contact_no" type="text" value="">
<label>Branch Email:</label>
<input class="input" name="Branch_Email" type="text" value="">
<label>Branch Address:</label>
<textarea cols="25" name="Branch_Address" rows="5"></textarea><br>
<label>Branch City:</label>
<input class="input" name="Branch_City" type="text" value="">
<label>Branch State:</label>
<input class="input" name="Branch_State" type="text" value="">
<label>Branch Pincode:</label>
<input class="input" name="Branch_Pincode" type="text" value="">
<label>Branch Country:</label>
<input class="input" name="Branch_Country" type="text" value="">

<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>

<style>
    @import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* The Above Line Is To Import Google Font Style */
.maindiv {
margin:30px auto;
width:580px;
height:500px;
background:#fff;
padding-top:20px;
font-family:'Droid Serif',serif;
font-size:14px
}
.title {
width:500px;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center
}
.form_div {
width:70%;
float:left
}
form {
width:300px;
border:1px dashed #aaa;
padding:10px 30px 40px;
margin-left:70px;
background-color:#f0f8ff
}
form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
textarea {
width:100%;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none
}
.input {
width:100%;
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
width:100%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
p {
color:red;
text-align:center
}
span {
text-align:center;
color:green
}

</style>
</body>
</html>

