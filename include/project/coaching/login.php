
<?php
session_start();

if(isset($_POST['submit']))

{
    $email=$_POST['email'];
    $password= $_POST['password'];
    if($email=="ankur@gmail.com"&& $password=="ankur")
    {
        $_SESSION['email']=$email;
        header("location:profile.php");

    }
    else{
        echo "invalid email and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<form method="post">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password"placeholder="password">>
        
        <input type="submit" name="submit">

</form>
    
</body>
</html>




