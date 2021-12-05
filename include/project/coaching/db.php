<?php
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"teacher");
if(isset($_POST['submit']))
{

    $name=""
 
 	
 if($con)
 {
 	echo "data base connected.<br>";

 }
 else{
 	echo "false";
 }

 $query="select * from teach";
 $result=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($result)) {
 	echo $row['name']."<br>";
 	echo $row['id'];
 	# code...
 }
 
}
else {
	echo "data  not inserted";
	header("location:form.php");
}

?>