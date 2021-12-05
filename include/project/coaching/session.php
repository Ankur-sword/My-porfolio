<?php
session_start();
$_SESSION['email']="ankur@gmail.com";
$_SESSION['name']="ankur pandey";

echo $_SESSION['email']."<br>";
echo $_SESSION['name'];

?>