<?php
$a = 5;
$b = 5;
$secondB = "5";
$c = 9;
$d = 2;

// == Igual

var_dump( $a == $b);
var_dump( $a == $secondB);

// === Idéntico
var_dump( $a === $b );

// != Diferente
var_dump( $a != $b);
var_dump( $a != $secondB);

// !== Diferente
var_dump( $a !== $b );
var_dump( $a !== $secondB );

// < Menor que
var_dump( $a < $b );
var_dump( $c < $b );

// > Mayor que
var_dump( $a > $b );
var_dump( $c > $b);
var_dump( $b > $d);

// <= Menor o igual 
var_dump( $a <= $b );
var_dump( $c <= $b);
var_dump( $b <= $d);

// Nave espacial
echo 2 <=> 1; //1
echo "\n";
echo 1 <=> 1; //0
echo "\n";
echo -50 <=> 1; //-1
echo "\n";
// ?? Fusión de null
$edad_default = 32;

echo $friend ?? $edad_default;
