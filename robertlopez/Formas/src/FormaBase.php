<?php

namespace robertlopez\Formas;

abstract class FormaBase
{
	private $tipo = null;
	
	public function __construct($tipo = null)
	{
		$this->tipo = $tipo;
	}
	
	/**
	 * Obtiene el tipo la figura;
	 *
	 * @return string
	 */
	public function getTipo()
	{
		return $this->tipo;
	}
	
	/**
	 * Obtiene la superficie de la figura;
	 *
	 * @return float
	 */
	abstract public function getSuperficie();
	
	/**
	 * Obtiene la base de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getBase()
	{
		return null;
	}
	
	/**
	 * Obtiene la altura de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getAltura()
	{
		return null;
	}
	
	/**
	 * Obtiene el diametro de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getDiametro()
	{
		return null;
	}
}
