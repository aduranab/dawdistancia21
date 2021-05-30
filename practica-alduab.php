<?php

/** Esta función calcula el Índice de Masa Corporal (IMC), el cual se obtiene dividiendo
* el peso en kg entre la altura al cuadrado en metros. Devuelve una cadena de texto que 
* indica dicho valor y el grupo de peso al que perteneces.
*@param double $peso peso en kg
*@param double $altura altura en metros
*@return string $cadena
*@autor Alvaro Duran Abadia
*@version 1.0
*{@internal faltaría definir las opciones erróneas al introducir disintos
*parámetros y realizar el control de excepciones}
*/
function calculoIMC ($peso, $altura){

	$resultado=$peso/($altura*$altura);
	
	if ($resultado<18.5)	$valor="bajo peso";
	else if($resultado>=18.5&&$resultado<25)	$valor="peso saludable";
	else if($resultado>=25&&$resultado<30)	$valor="sobrepeso";
	else $valor="exceso de peso";
	
	$cadena="Tu índice de masa corporal (IMC) es de ".round($resultado, 2).", por lo tanto posees ".$valor.".";
	
	return $cadena;

}

/** Esta función devuelve una cadena de texto que contiene un número aleatorio en función del número de caras que seleccionemos de un "dado" que queramos lanzar.
*@param integer $numeroCaras numero de caras de un dado
*@return string $resultadoDado devuelve cadena de texto que contiene un número aleatorio
*@autor Alvaro Duran Abadia
*@version 1.0
*{@internal faltaría definir las opciones erróneas al introducir disintos
*parámetros y realizar el control de excepciones}
*/

function dado ($numeroCaras){
	
	if($numeroCaras==4)	$aleatorio=rand(1,4);
	else if($numeroCaras==6)	$aleatorio=rand(1,6);
	else if($numeroCaras==8)	$aleatorio=rand(1,8);
	else if($numeroCaras==10)	$aleatorio=rand(1,10);
	else if($numeroCaras==12)	$aleatorio=rand(1,12);
	else if($numeroCaras==20)	$aleatorio=rand(1,20);
	else if($numeroCaras==30)	$aleatorio=rand(1,30);
	else if($numeroCaras==100)	$aleatorio=rand(1,100);
	else	$aleatorio=0;
	
	if($aleatorio==0)	$resultadoDado="Dado no válido";
	else $resultadoDado="Al lanzarlo ha salido un ".$aleatorio;
	
	return $resultadoDado;
}

/**
* Empezamos a mostrar los resultados
* @access public 
*/

echo calculoIMC(72, 1.78)."<br />";
echo "Has elegido un dado de 6 caras. ".dado(6).".";

?>
