<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

<?php require 'navbar.php';?>
	<div class="container col-md-6">
		<div class="card">
			<div class="card-header">
				Calculator
			</div>
			<div class="card-body">
				<div class="form-group">
					<input type="number" id="num1" class="form-control" placeholder="Number 1">
				</div>
				<div class="form-group">
					<input type="number" id="num2" class="form-control" placeholder="Number 2">
				</div>
				<div class="form-group">
					<input type="number" id="result" class="form-control" placeholder="Result">
				</div>
				<div class="form-group">
					<!-- buttons -->
					<button class="btn btn-primary" id="add" onclick="calculator(this.id)">Add</button>
					<button class="btn btn-warning" id="sub" onclick="calculator(this.id)">Subtract</button>
					<button class="btn btn-danger" id="mul" onclick="calculator(this.id)">Multiply</button>
					<button class="btn btn-success" id="div" onclick="calculator(this.id)">Divide</button>
				</div>
			</div>
		</div>
	</div>


	<script>
		
		function calculator(value)
		{
			var n1 =document.getElementById("num1").value;
			var n2 = document.getElementById("num2").value;
			var result = document.getElementById("result");
			var num1 = parseInt(n1);
			var num2 = parseInt(n2);


			switch(value)
			{
				case 'add':
				result.value = num1+num2;
				break;
				case 'sub':
				result.value = num1-num2;
				break;

				case 'mul':
				result.value = num1*num2;
				break;

				case 'div':
				result.value = num1/num2;
				break;
			}
		}


	</script>
<?php require 'C:\xampp\htdocs\mywork\footer.php' ?> 