<?php
echo "<h1>PHP - Aula 02</h1>";
echo "<h2>Tipos de Dados</h2>";
echo "<hr>";

$nome = "Bruce";
$idade = 40;
$altura = 1.78;
$fumante = false;

echo "Nome: " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";
echo "Fumante: " . $fumante;
echo "<br>";

echo $nome . " - " . $idade . " - " . $altura . " - " . $fumante;

echo "<hr>";
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";

echo "<h2> Operadores aritméticos</h2>";
$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % 2 . "<br>";
echo $n1 ** 3 . "<br>";


echo "<h2>Operadores relacionais</h2>";

echo ($n1 > $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 != $n2) . "<br>";
echo ($n1 == $n2) . "<br>";
?>