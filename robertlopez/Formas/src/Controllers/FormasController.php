<?php

namespace robertlopez\Formas\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use robertlopez\Formas\FormaFactory;


class FormasController extends Controller
{
    public function index(Request $request)
    {
    	$circulo = FormaFactory::generar('Circulo');
    	$triangulo = FormaFactory::generar('Triangulo');
    	$cuadrado = FormaFactory::generar('Cuadrado');
    	
    	
    	dd(
    		$circulo, $circulo->getSuperficie(), $circulo->getBase(), $circulo->getAltura(), $circulo->getDiametro(), $circulo->getTipo(),
    		$triangulo, $triangulo->getSuperficie(), $triangulo->getBase(), $triangulo->getAltura(), $triangulo->getDiametro(), $triangulo->getTipo(),
    		$cuadrado, $cuadrado->getSuperficie(), $cuadrado->getBase(), $cuadrado->getAltura(), $cuadrado->getDiametro(), $cuadrado->getTipo()
    	);
    }
    
    public function test(Request $request)
    {
    	$forma = null;
    	if(!empty($request->forma)){
    		$forma = FormaFactory::generar($request->forma);
    	}
    	
    	dd($forma);
    }
}
