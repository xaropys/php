<?php
 $b = 20;
 $a = 10;
 $c = 30;

 if ($a > $b) {
     echo "a é maior que b";
 } else { 
     echo "b é maior que a";
 };
//using &&
 if ($a > $c && $b > $c) {
     echo "a é maior que c e b é maior que c";
 } else {
     echo "c é maior que a e b";
 };
//using ||
 if ($a > $c || $b > $c) {
     echo "a é maior que c ou b é maior que c";
 } else {
     echo "c é maior que a e b";
 };
//Decision estructures

$escolha = 0;

switch ($escolha) {
    case: 1 
    echo "escolha 1";
    break;
    case: 2
    echo "escolha 2";
    break;
    case: 3
    echo "escolha 3";
    break;
    default:
    echo "escolha inválida";
};

//Decision estructures : while

$contador = 0;

while ($contador < 10) {
    echo $contador. "<br>";
    $contador++;
};
 ?>