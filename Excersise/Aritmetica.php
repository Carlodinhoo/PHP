<?php

// Asignacion por referencia
$x = 3;
$y = &$x;

echo "$x, $y \n"; // mostrara 3, 3

$x = 5;

echo "$x, $y \n"; // mostrara 5, 5

// Concatenacion es con ' . '
$z = "Hola ";
$z .= "Mundo";
echo "$z \n";

$k = $x << 2;
echo "$k \n";
$m = $k >> 2;
echo "$m \n";

/*
	Se evalua; si $x es True entonces $y si es False $z
*/
$x = "";
$valor = (empty($x)) ? "primero" : "segundo";

echo "$valor \n";

//Otra forma
if(empty($x)){
	$valor = "primero";
}else{
	$valor = "segundo";
}
echo "$valor \n";

$w = (false && foo()); // false
$x = (true  || foo()); // true
$y = (false and foo()); // false
$z = (true  or  foo()); // true

// Actúa como: ($m = (false || true))
$m = false || true;
// Actúa como: (($n = false) or true)
$n = false or true;

var_dump($m, $n);

// Actúa como: ($a = (true && false))
$a = true && false;
// Actúa como: (($b = true) and false)
$b = true and false;

$A = array("x" => "perro", "y" => "gato");
$B = array("x" => "pato", "y" => "conejo", "z" => "liebre");

$C = $A + $B;
echo "Union de \$a y \$b: \n";
var_dump($C);
/*
* array (size=3)
  'x' => string 'perro' (length=5)
  'y' => string 'gato' (length=4)
  'z' => string 'conejo' (length=6)
*/

$x = array("perro", "gato");
$y = array(1 => "gato", "0" => "perro");

var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)

/*
	Verificamos si un objeto es instancia de una clase
*/
class MiClase
{
}

class NoEsMiClase
{
}
$x = new MiClase;

var_dump($x instanceof MiClase); // true
var_dump($y instanceof NoEsMiClase); // false

?>