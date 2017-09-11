<?php

namespace robertlopez\Formas;

use robertlopez\Formas\Contracts\Forma;

class Circulo extends FormaBase implements Forma
{
	private $radio;
	
	public function __construct($radio = 0)
	{
		parent::__construct('circulo');
		$this->radio = $radio;
	}

	/**
	 * Obtiene la superficie de la figura;
	 *
	 * @return float
	 */
	public function getSuperficie()
	{
		return pow($this->radio, 2) * pi();
	}
	
	/**
	 * Obtiene el diametro de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getDiametro()
	{
		return $this->radio * 2;
	}
	
	/**
	 * Asigna un valor al radio 
	 * 
	 * @param float
	 * @return void
	 */
	public function setRadio($radio=0)
	{
		$this->radio = $radio;
	}
}