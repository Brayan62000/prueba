<?php
require_once "Persona.php";

$persona1 = new Persona("Marco",60,1.90);
$persona2 = new Persona("Antonio",80,1.80);
$persona3 = new Persona("Maria",70,1.60);
$persona4 = new Persona("Andrea",90,1.70);
echo $persona1->calcularIMC()."<br><br>";
echo $persona2->calcularIMC()."<br><br>";
echo $persona3->calcularIMC()."<br><br>";
echo $persona4->calcularIMC()."<br><br>";


?>