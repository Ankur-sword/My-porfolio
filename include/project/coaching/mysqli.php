<?php
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"teacher");
 $name="abc";

 $query="insert into teach (name) value('$name')";
 $res=mysqli_query($con,$query);
 if($res)
 {
 	echo data inserted;
 }
 else{
 	echo not;
 }
 ?>

