<?php
header('Content-type: application/json');
require 'src/Calculadora.php';

$num1=$_POST['num1'];

$num2=$_POST['num2'];

$resultado=0;

$operacion=$_POST['operacion'];

$obj=new Calculadora($num1,$num2);

switch (strtoupper($operacion)) {
	case 'SUMA':	$resultado=$obj->Sumar();
		break;
	case 'RESTA':	$resultado=$obj->Restar();
		break;
	case 'MULTIPLICACION':	$resultado=$obj->Multiplicar();
		break;
	case 'DIVISION':	$resultado=$obj->Dividir();
		break;
	default : $resultado=0;
}

$response['realizado'] = true;

$response['resultado'] = $resultado;

echo json_encode($response);
