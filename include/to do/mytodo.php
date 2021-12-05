<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php require 'db.php';
$msg=insert($con);
$query="SELECT * FROM todolist";
$res=mysqli_query($con,$query);
$id=$_POST['id'];
$password=$_POST['password'];
$del=delete($password,$id,$con);





?>
<?php require 'C:\xampp\htdocs\mywork\workspace.php'?>

    
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="todo.css">
    <?php require  'navbar.php';?>
<div class="word">

<div class="photo display-2 "style="color:white; text-align:center;" >
A year from now you may wish you had started today.
</div><br>
 <div class="card photo2 display-2"style="color:white; text-align:center;">
My To-Do List

 </div>
 <!--my to do list-->
 
 
<!--table-->
<div class=" row justify-content-center jumbotron bg-secondary"style=" border:10px solid blue;border-radius:20px;" >
<div class="col-md-9 ">
<table class="table"style="background-color:brown;">

    <tr style="background-color:chartreuse;">
    <th scope="col">#</th>
      <th scope="col">To-Do</th>
      <th scope="col">Checkbox</th>
      <th scope="col">Password</th>
      <th scope="col">Remove</th>
    </tr>
  
<?php while($row = mysqli_fetch_array($res)){?>

    <tr>
    <form action=""method="post">
      <th><?php $sr='#'; echo $sr;?></th>
      <th><?php echo $row ['add'];?></th>
      <th>
        <input type="checkbox" name="id" value="<?php echo $row['id'];?>" require>
      </th>
      <th> <input type="password" name="password"> </th>
      <th> 
        <input type="submit"name="deletetodo" class="bg-danger">
      </th>
         </form> 
    </tr>
    <?php ; } ?> 
  
</table>
</div>
</div>
 <br>
 <h3 class="text-color-danger"style="text-align:center;">Have some more task</h3>
 <div><?php if(!empty($msg)){echo $msg;}?></div>
 <div class="row justify-content-center">
   <div class="col-md-7 bg-dark " style="border: 10px solid red; border-radius:20px;">
 <form  action="mytodo.php"method="post">
  <div class="form-group">
    <label style="color:white;">To do</label>
    <input type="text" name="add" class="form-control">
    <small style="color:white;">Don't forget preference of your work</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:white;">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form></div>
</div>
<br>
</div>
<?php require 'C:\xampp\htdocs\mywork\footer.php' ?>

