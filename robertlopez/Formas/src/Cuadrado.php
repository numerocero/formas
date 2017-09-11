<?php

namespace robertlopez\Formas;

use robertlopez\Formas\Contracts\Forma;

class Cuadrado extends FormaBase implements Forma
{
	private $base;
	private $altura;
	
	public function __construct($base=0)
	{
		parent::__construct('cuadrado');
		$this->base = $base;
		$this->altura = $base;
	}
	
	/**
	 * Obtiene la superficie de la figura;
	 *
	 * @return float
	 */
	public function getSuperficie()
	{
		return $this->base * $this->altura;
	}
	
	/**
	 * Obtiene la base de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getBase()
	{
		return $this->base;
	}
	
	/**
	 * Obtiene la altura de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getAltura()
	{
		return $this->altura;
	}
	
	public function setBase($base=0)
	{
		$this->base = $base;
		$this->altura = $base;
	}
	
	public function setAltura($altura=0)
	{
		$this->altura = $altura;
		$this->base = $altura;
	}
}