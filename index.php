<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container body">
	<h3>Calculadora </h3>
  	<div class="main_container">
	<div class="row">
		<form class="navbar-form navbar-center">
		  <div class="form-group">
		  	<input type="text" class="form-control" id="numero1" autofocus="true" placeholder="0">
		  	<select id="operacion" class="form-control">
				<option value="SUMA">SUMA</option>
				<option value="RESTA">RESTA</option>
				<option value="MULTIPLICACION">MULTIPLICACION</option>
				<option value="DIVISION">DIVISION</option>
		  	</select>
		    <input type="text" class="form-control" id="numero2" placeholder="0">
		  </div>
		  <input type="button" class="btn btn-success" onclick="calcular()" value="Calcular" />
		  <div class="form-group">
		  	<label>=</label>
		  	<input type="text" class="form-control" id="resultado" placeholder="0">
		  </div>
		</form>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="js/calculo.js" ></script>
</body>
</html>