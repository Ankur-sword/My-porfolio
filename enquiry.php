<?php require 'db2.php';
// $msg=insert($con);?>
<?php require 'workspace.php'?>


    <link rel="stylesheet" href="styleo.css">
</head>
<body class="mybody">
<div class="container-fluid ">
  
     
   <div class="row ">
     <div class="col-md-4"></div>
       <div class="col-lg-4 first" >
      
      <div> <?php if(!empty($msg)){echo $msg;}?></div>
   <form action="" method="post" >
   <fieldset>
   
      <center class="display-4 text" style="color:white">
      
            Enquiry Form</center>
            <p style="color:white">Name:</p>
       <input type="text" name="name" class="form-group form-control" style="border-radius: 25px;" >
         <p style="color:white">Email:</p>
      

       <input type="email" name="email" class="form-group form-control" style="border-radius: 25px;">
       
       <p style="color:white">Pofession:</p>
       <input type="text" name="profession" class="form-group form-control" style="border-radius: 25px;" >
        

       <p style="color:white">Contact:</p>
       <input type="tel" name="contact" class="form-group form-control" style="border-radius: 25px;" >



       <p style="color:white">Fill given key<p>
       <input type="number" name="key" class="form-group form-control" style="border-radius: 25px;" >
       <p style="color:green; text-align:center; border:2px solid white;background-color:white;border-radius: 25px;">568921</p>

       <input type="submit" name="submit" class="form-group form-control btn btn-info"  style="border-radius: 25px;">
       
       </fieldset>
     </form>
       </div>
      </div>
    </div>
</body>
</html>