<?php
class Calculadora
{
	private $numero1;
	private $numero2;
	private $resultado;

	public function Calculadora($num1,$num2){
		$this->numero1=$num1;
		$this->numero2=$num2;
	}

	public function Sumar()
	{
		return $this->numero1+$this->numero2;
	}

	public function Restar()
	{
		return $this->numero1-$this->numero2;
	}

	public function Multiplicar()
	{
		return $this->numero1*$this->numero2;
	}

	public function Dividir()
	{
		if($this->numero2!=0){
			return $this->numero1/$this->numero2;
		}else{
			return 0;
		}
	}

}