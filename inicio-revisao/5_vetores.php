<?php

// Vetor (array simples - "1 linha")
$frutas = ["Maça", "Banana", "Uva"];

//Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

$matriz = [
    ["Max Verstappen", "Oscar Piastri", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

echo "<br><br>";
echo "Lista de pilotos de F1 (Dica:010;";

//Exibindo os valores da matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
    echo $piloto . "!";
    }
echo "<br>";11;
}