<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atividade Função </title>
</head>
<body>

<?php

//A)

echo "<h2> A) </h2>";

function tabuada ($num){

    for ($i = 0; $i <= 10; $i++) {
           $soma = $num * $i;
             echo $num . " x " . $i . " = $soma <br>";
    }
}
tabuada (2);


//B)

echo "<hr>";

echo "<h2> B) </h2>";

function inv ($vetor){

    print_r ($vetor);

    echo "<br>";

    $inverterV = array_reverse ($vetor);

    print_r ($inverterV);

}


$exemplo = ["a","z","m"];

inv ($exemplo);


//C)

echo "<hr>";

echo "<h2> C) </h2>";

function MaiorN ($vetor){
            
    $maior = $vetor[0];

    for ($i = 0; $i < sizeof($vetor); $i++){
         if($vetor[$i] > $maior){
             $maior = $vetor[$i];
        }
    }
    echo "<h4> O maior número é: $maior </h4>";
}

    $exemplo2 = [41,19,21,50,75,209,801];

    MaiorN ($exemplo2);


//D)

echo "<hr>";

echo "<h2> D) </h2>";


 
function VCpf ($cpf) {


    $qtd = mb_strlen ($cpf);
    
    if ($qtd === 11) {

        $vcpf = mb_substr ($cpf, 0, 3) . '.' . 
        $vcpf = mb_substr ($cpf, 3, 3) . '.' . 
        $vcpf = mb_substr ($cpf, 6, 3) . '-' . 
        $vcpf = mb_substr ($cpf, 9, 2);
    } 

}



//E)

echo "<hr>";

echo "<h2> E) </h2>";

function celsius ($f) {

	$c = ($f - 32 ) / 18 ; //(f − 32) * 5/9
	echo "A temperatura em Fahrenheit para Celsius é de: $c <br>";

}

celsius(90);
celsius(77);
celsius(52);
celsius(12);



//F)

echo "<hr>";

echo "<h2> F) </h2>";


//Escrever a frases
$frase = " No dia mais claro, na noite mais densa. ";

// Marca palavra
$buscaT = array ("dia", "claro", "densa");

function BuscaTexto ($t, $buscaT){
    if (is_array ($buscaT)){
        foreach ($buscaT as $p){
            $m = "<span style='color: red'>  $p  </span>";
            $t = str_replace ($p, $m, $t);
        }
    }
    return $t;
    }

    echo BuscaTexto ($frase, $buscaT);





//G)

echo "<hr>";

echo "<h2> G) </h2>";

// Vetor para somar os valores
$vetorS = [1, 3, 4, 5 , 88, 90, 102];

$as = sizeof($vetorS);

$s = 0;

for ($i = 0; $i < $as; $i++) {
    if (is_int ($vetorS [$i]) == true) {
        $s += $vetorS [$i];
    }
}

echo "O total da soma dos valores do vetor é: $s ";


?>

    
</body>
</html>