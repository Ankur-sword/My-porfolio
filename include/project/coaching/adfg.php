<?php

//echo .$POST['email'];
if(isset($_POST['submit']))
{
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	echo $email."<br>";
	 echo md5($pass);
	 $p="ankur";
	 $e="ankurpandey151@gmail.com"

}
else
{
	echo "not done";
	
}



?>