<?php

namespace robertlopez\Formas\Contracts;

interface Forma
{
	/**
	 * Obtiene la superficie de la figura;
	 *
	 * @return float
	 */
	public function getSuperficie();
	
	/**
	 * Obtiene la base de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getBase();
	
	/**
	 * Obtiene la altura de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getAltura();
	
	/**
	 * Obtiene el diametro de la figura o null si no aplica para el tipo de figura;
	 *
	 * @return mixed
	 */
	public function getDiametro();
	
		/**
	 * Obtiene el tipo la figura;
	 *
	 * @return string
	 */
	public function getTipo(); 
}