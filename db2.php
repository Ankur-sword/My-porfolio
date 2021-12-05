<?php 
session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"mywork");

function insert($con)
{
    if(isset($_POST['submit']))
    {
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $profession=mysqli_real_escape_string($con,$_POST['profession']);
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
        $key=mysqli_real_escape_string($con,$_POST['key']);


      
         if($key==568921)
      {   
         $query="INSERT INTO `enquiryform`(`name`,`email`,`profession`,`contact`) VALUES ('$name','$email','$profession','$contact')";
         $res=mysqli_query($con,$query);
              if($res)
                {
                 
                 return showSuccessMsg("SignUp Successfully!!!");
                 header("location: include/index.php");
                }
                else
                {
                  return showErrorMsg("Something Went Wrong!!");
                  
                }
       }
       else
       {
            return showErrorMsg("Please fill correct key");
        }        
      
            
    }
     else
     {
          return showErrorMsg("Please fill all input fileds");
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