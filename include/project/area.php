<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>area</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php require 'navbar.php';?>
<br>
<br>

    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary">

            <h1>calculate area</h1>
            <div>
                <div class="card-body">
                    <div>
                        <input type="number" id="first no" class="form control "name=""  value="first prameter" placeholder="first parameter">

                    </div>
                    <div>
                        <input type="number"id="second no" class="form control"  name="" value="second parameter" placeholder="second parameter">

                        <div >
                            <input type="number" name=""id="result" placeholder="RESULT">

                        </div>

                    </div>
                    
                        
                        

                </div>
            </div>

            </div>
            

        </div>
        <div class="form group">
       <div>
            
<button  class="btn btn-secondary" id="square"onclick="area(this.id)">square</button>

        
    <button class="btn btn-danger"id="reactangle" onclick="area(this.id)"> reactangle
</button>
</div>
 </div>
</div>
    </div>
<script>
function area(value)
{
    var a=document.getElementById("first no").value;
    var b=document.getElementById("second no").value;
    var result=document.getElementById("result");
    var x=parseInt(a);
    var y=parseInt(b);
    switch(value)
    {
    case'square':result.value=x*y;break;
    case 'reactangle':result.value=x*y;break;
    }
}


</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    
<?php require 'C:\xampp\htdocs\mywork\footer.php' ?> 
