<?php
use PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{
	public function testSumaCorrectamente(){
		$obj=new Calculadora(40,1);
		$suma=$obj->Sumar();
		$this->assertEquals(41,$suma);
	}

	public function testVerificarResta(){
		$obj=new Calculadora(40,1);
		$resta=$obj->Restar();
		$this->assertEquals(39,$resta);
	}

	public function testVerificarMultiplicacion(){
		$obj=new Calculadora(40,1);
		$multiplicacion=$obj->Multiplicar();
		$this->assertEquals(40,$multiplicacion);
	}

	public function testVerificarDivision(){
		$obj=new Calculadora(40,10);
		$div=$obj->Dividir();
		$this->assertEquals(4,$div);
	}

	public function testVerificarSiDivideEntreCero(){
		$obj=new Calculadora(40,0);
		$div=$obj->Dividir();
		$this->assertEquals(0,$div);
	}
}
