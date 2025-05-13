<?php

// a A ideia é que selecione  código que vai execrutar e clicar Ctrl + ;

//Ex 1
// $aluno = ["Arroz", "Bancom", "Carne", "Doritos", "Ervilha", "Farinha", "Goiba", "Hanbuger"];

// for($cont =0; $cont < count($aluno); $cont++){
//     echo $aluno[$cont].PHP_EOL;
// }

// //Ex2
// $aluno = [
//     ["nome" => "Mario", "nota" => 8.0],
//     ["nome" => "Paulo", "nota" => 6.1],
//     ["nome" => "Amada", "nota" => 7.9]
// ];

// echo $aluno[0]["nome"] . PHP_EOL;
// echo $aluno[1]["nota"] . PHP_EOL;

//Ex3
// $numero = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
// $soma = 0;
// $resultado = 0;

// for($cont = 0; $cont < count($numero); $cont++){
//     $soma += $numero[$cont];
// }

// $resultado = $soma / count($numero);

// echo("Media é $resultado");

//Ex4

// $pares = array(5, 6, 4, 8, 2, 9);
// $soPares = array(); 

// foreach ($pares as $numero) {
//     if ($numero % 2 === 0) {
//         $soPares[] = $numero;
//     }
// }

// foreach ($soPares as $par) {
//     echo $par . 'Pares. '.PHP_EOL;
// }

//4errado
// $palavras = ["apolo","hermes","dionizio","querontes","ares","afrodite"];
// $com_a = [];

// foreach ($palavras as $palavra) {
//     if ($palavra[0] == "a") {
//         $com_a[] = $palavra
//     }
// }

// echo "Palavras com A $com_a"

//Ex5

// $pessoa = [
//     "Ana" => "18 9999192",
//     "Iso" => "18 9901928",
//     "Brad" => "16 8927911"
// ];

// foreach($pessoa as  $chave => $valor){
//     echo "$chave: $valor\n";
// }

// //Ex6

// $arrayDuplicada = array(1, 2, 2, 3, 4, 4, 4, 5);

// $arrayUnico = array_unique($arrayDuplicada);

// print_r($arrayUnico);

// //Ex7

// $arrayOriginal = array(1, 2, 3, 4, 5);

// echo "Array Original: ";
// print_r($arrayOriginal);

// $arrayInvertido = array_reverse($arrayOriginal);

// echo "Array Invertido: ";
// print_r($arrayInvertido);

// //Ex8

// $num = [1, 2, 4, 3, 6, 7, 5, 8];
// $maior = $num[0];

// foreach ($num as $num) {
//     if ($num > $maior) {
//         $maior = $num;
//     }
// }

// echo $maior . ' É maior  ';

