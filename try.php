<?php
$pass='1234';
$str_pass=password_hash($pass,PASSWORD_BCRYPT);
echo "$str_pass";
$pass_check=password_verify($pass, $str_pass);
echo "<br> $pass_check";
if ($pass_check) {
	echo "<br>success";}
	else{
		echo "not";
	
}
?>