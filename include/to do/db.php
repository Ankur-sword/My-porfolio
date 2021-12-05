<?php 
session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"mywork");

function insert($con){
    if(isset($_POST['submit'])){
        $add=mysqli_real_escape_string($con,$_POST['add']);
        
$pss="jc612178";
if ($pss==$_POST['password'])
      {
         if(!empty($add)){ 
        $query="INSERT INTO `todolist`(`add`) VALUES ('$add')";
              $res=mysqli_query($con,$query);
              if($res)
              {
                 
                 return showSuccessMsg("SignUp Successfully!!!");
                }
                else
                {
                  return showErrorMsg("Something Went Wrong!!".mysqli_error($con));
                }
              }
              else
              {
                return showErrorMsg("Password not matched.");
              }
     }
    else
    {
return showErrorMsg("please enter some value!!");
         
   }
  # code...
    }
 
}
//delete
function delete($password,$id,$con)
{
if(isset($_POST['deletetodo']))
{
  $pass="jc612178";
  if($pass==$password)
  {
    $query="DELETE FROM todolist WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if($res)
    {
      header("location:mytodo.php");
      return showSuccessMsg("removed");
    }
    else
    {
      return showErrorMsg("try again");

    }

  }
  else
  {
    showErrorMsg("sorry you cannot edit it");
  }
}
}
function showErrorMsg($msg)
{
	return "<p class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$msg."</p>";
}

//success msg
function showSuccessMsg($msg)
{
	return "<p class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$msg."</p>";
}



?>