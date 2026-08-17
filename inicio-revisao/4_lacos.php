<?php

// Laço FOR - Exemplo aplicado em Tabuada
for($i = 1; $i <= 10; $i++){
    echo "8 x $i = " .(8 * $i) . "\n";
}

//while - (Enquanto) - Exemplo de contagem regressiva
echo "<br>";
$n = 8;
while ($n > 0) {
    echo $n . "<br>";
    $n --;
}
//do while - (Faça enquanto) - Executa ao menos 1 vez

echo "<br>";
$j = 10;
do {
    echo "J vale $j<br>";
    $j ++;
} while ($j <= 10);