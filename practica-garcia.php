<?php
/**
* Paquete matemático.
* Es un paquete con funcionalidad para sumar y restar. 
* {@internal Tarea práctica para el módulo de Desarrollo de Aplicaciones Web}
* 
* @author Carlos García Vicente <cgarvic918@g.educaand.es>
* @version 1.0
* 
*/

/**
* Función para sumar dos números.
* A esta función se le pasan dos números y ofrece como resultado la suma de ambos.
*
* @param int $a Es el primero de los números que se van a sumar.
* @param int $b Es el segundo de los números que se van a sumar.
* @return int Se devuelve la suma de ambos números.
*/
function sumar($a, $b){
    $resultado = $a + $b;
    return $resultado;
}

/**
* Función para restar dos números.
* A esta función se le pasan dos números y ofrece como resultado la resta de ambos.
*
* @param int $a Es el primero de los números que se van a restar.
* @param int $b Es el segundo de los números que se van a restar.
* @return int Se devuelve la resta de ambos números.
*/
function restar($a, $b){
    $resultado = $a - $b;
    return $resultado;
}


?>
