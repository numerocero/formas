<?php
namespace robertlopez\Formas;

class FormaFactory 
{
	public static function generar($tipo)
	{
		$tipo = __NAMESPACE__.'\\'.$tipo;
		return new $tipo();
	}
}