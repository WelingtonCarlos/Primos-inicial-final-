<?php


Primos(rand(1,50), rand(51,100));

function Primos($inicial, $final)
{
    $numeroPrimo = array();

    // o incremento e decremetno abaixo é para encontrar os números Primo ENTRE os valores inicial e final
    // portanto, se faz necessário o incremento no inicial para pegar o valor logo a cima do inicial e decremento para pegar o valor logo abaixo do final

    $inicial++;
    $final--;

    for ($i = $inicial; $i <= $final; $i++) {
        $cont = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            $numeroPrimo[] = $i;
        }
    }

    // e no abaixo, invertemos para pegarmos o valores originais dos números inicial e final.

    $inicial--;
    $final++;

    echo "Número Inicial: ".$inicial."<br>";
    echo "Número Final: ".$final."<br>"."<br>";

    echo "Encontrados ".count($numeroPrimo)." números numeroPrimo, são eles: ".implode(", ", $numeroPrimo)."<br>";
}
