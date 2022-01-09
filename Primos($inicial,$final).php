<?php


Primos(rand(1,9999), rand(1,9999));

function Primos($inicial, $final) {

    $numeroPrimo = array();

    // o incremento e decremetno abaixo é para encontrar os números Primo ENTRE os valores inicial e final
    // portanto, se faz necessário o incremento no inicial para pegar o valor logo a cima do inicial e decremento para pegar o valor logo abaixo do final

    

    if ($inicial < $final) {


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

	elseif ($inicial > $final) { // se o valor inicial foi maior que o do final calcularemos ao contrário.

		$inicial--;
    		$final++;
		
		for ($i = $final; $i <= $inicial; $i++) {
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

	    $inicial++;
	    $final--;

	    echo "Número Inicial: ".$final."<br>";
	    echo "Número Final: ".$inicial."<br>"."<br>";

	    echo "Encontrados ".count($numeroPrimo)." números numeroPrimo, são eles: ".implode(", ", $numeroPrimo)."<br>";

	}
}
