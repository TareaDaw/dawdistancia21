<?php

/**
 * Devuelve un saludo y nombre
 *
 * @author Nuria Vázquez Flores
 * @version 1.0
 * @param string $nombre devuelve un nombre
 * @return string $saludo Devolveremos una cadena con saludo y nombre
 * @access public
 * {@internal los desarrolladores pueden modificar el parámetro de entrada con otro dato}
 */
function funcionSaludar($nombre)
{
	
  $saludo = " Hola ".($nombre);
  return $saludo;
}

/**
 * Esta función devuelve la suma de dos números
 *
 * @author Nuria Vázquez Flores
 * @param integer $resultado
 * @return integer $puntos  devolvemos un número
 * @version 1.0
 * @access private
 * @param boolean $suerte que no se ve
*/
function sumar($num1, $num2)
{
  $puntos = $num1 + $num2;
  $resultado = $puntos;	
  return $puntos;
}

/**
 * Funciones invocadas
 * @access public
*/
echo "Tu saludo es :".funcionSaludar("Nuria");
echo "El resultado de la suma es :".sumar(1,2);
echo "Esto es una prueba para la tarea última de DAW";
?>
