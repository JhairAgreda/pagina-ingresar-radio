<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
$perimetro1=0;
$perimetro2=0;	
}else{
	$radio=$_POST["radio"];
	$radiotriple=$radio*3;
	$perimetro1=ceil(2*pi()*($radio*0.5));
	$perimetro2=ceil(2*pi()*($radio*0.25));
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	.container{
		background:#4681F8;
		margin-top: 30px;
        padding: 30px;
        width: 45% !important;
        border-radius: 20px;
		color: aliceblue;
	}	
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body><br>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
	<div class="container">
		<div class="row">
			<div class="col-5"><b>INGRESE RADIO:</b></div>
			<div class="col-4"><input type="number" name="radio" class="form-control"required></div>
		</div><br>
		<div class="row">
			<div class="offset-5 col-2"><input type="submit" value="Calcular" class="btn btn-success"></div>
			<div class="col-5"><input type="reset" value="Limpiar" class="btn btn-danger"></div>
		</div><br>
		<div class="row">
			<div class="col-5"><b>CUANDO SE REDUCE UN 50%:</b></div>
			<div class="col-4"><input type="number" readonly name="perimetro1" value="<?php echo $perimetro1?>" class="form-control"></div>
		</div><br>
		<div class="row">
			<div class="col-5"><b>CUANDO SE REDUCE UN 25%:</b></div>
			<div class="col-4"><input type="number" readonly name="perimetro2" value="<?php echo $perimetro2?>" class="form-control"></div>
		</div>
	</div>
	</form>
</body>
</html>