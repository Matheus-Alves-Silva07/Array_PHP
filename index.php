<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços de repetição</title>
</head>

<body>
    <h1>Exemplos de loop "laço de repetição"</h1>

    <?php
    //################## COMANDO FOR/ PARA ################################

    for ($i=0; $i < 100 ; $i++) {  // for -> para
         echo $i ."\n";
    }

    //######################################################################

    echo "Clacular a soma dos elementos de um array/vetores" ."<br>";// para concatenar colocar pontos fora das aspas


     echo "Calcular a soma dos elementos de um array/vetores <br>";
    echo "Dado so elementos 10,11,12,13,14,20 faça uma soma";
     
     //######################### COMANDO FOREACH ##################################
      
     $arrayNumero = [10, 11, 12, 13, 14, 20 ];
     $soma = 0;
     foreach ($arrayNumero as $key => $numero) {
        $soma += $numero;

     }
     echo "<br>";
    echo "As somas dos elementos do array é:" .$soma;
     

     //##############################################################
    
    $n = 6;
    $array = [10, 11, 12, 13, 14, 20];
    //echo "<br>";
    //echo $array[3];
    function soma_elementos($array, $n)
    {
        $soma = 0;

        for ($i = 0; $i < $n; $i++) {
            $soma += $array[$i];
        }
        return $soma;
    }

    $resultado = soma_elementos($array, $n);
    echo "<br>";
    echo "O resultado da soma é" . $resultado;

 //###################### WHILE/ENQUANTO ######################################

 echo "Exercicios: contar até um numero especifico";
  $numero = 1000;
  $contador = 1;
 
  while ($contador <= $numero) {
     echo "<br>";
     echo $contador ."\n";
    $contador++;

 }

//######################### COMANDO FOR DENTRO DO WHILE ################################################

 $frutas = ["Maçã", "Banana", "Laranja"];
 echo "<br>";
 for($i = 0; $i < count($frutas); $i++) {
     $j = 0;
     echo "<br>";
     while ($j < strlen($frutas[$i])) {
         echo "letra:" .$frutas[$i][$j] ."\n";
         $j++;
     }
    echo "Fim da fruta" .$frutas[$i] . "\n";
    echo "<br>";
}


$frutas = ["Maçã", "Banana", "Laranja"];

for ($i = 0; $i < count($frutas); $i++) {
$j = 0;
echo "<br>";

while ($j < mb_strlen($frutas[$i], 'UTF-8')) {
echo "Letra: " . mb_substr($frutas[$i], $j, 1, 'UTF-8') . "\n";
$j++;
}

echo "Fim da fruta: " . $frutas[$i] . "\n";
}

//O UTF-8 é o formato de codificação de caracteres dominante na internet. 
//Esse erro ocorre porque o software que você usa codifica o arquivo em outro formato, como ISO-8859 , em vez de UTF-8 . 
//Há várias soluções que podem ser usadas para alterar o arquivo para a codificação UTF-8


     
     ?>

</body>

</html>