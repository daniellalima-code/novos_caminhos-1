<?php

// Questão 4

// Gisifruno ganhou estátuas de diferentes tamanhos como
// presente da Mária de aniversário,
// cada estátua tendo um tamanho inteiro não negativo.
// Como ele gosta de fazer as coisas perfeitas, ele quer
// organizá-las da menor para a maior, de forma que cada
// estátua seja maior que a anterior exatamente em 1.
// Ele pode precisar de algumas estátuas adicionais 
// para conseguir isso. 
// Ajude-o a descobrir o número mínimo de estátuas
// adicionais necessárias.

//Exemplo

//Se statues = [6, 2, 3, 8], o valor
// de retorno deve ser 3.
// Gisifruno precisa de estátuas de tamanhos 4, 5 e 7
// ou seja de três estátuas

function makeArrayConsecutive2($estatua)
{
    //Pegando o maior e o menor número de dentro do vetor $statues.
    $maior = max($estatua);
    $menor = min($estatua); // rand(); gera um número aleatório.

    // foreach($statues as $v){
        //if ($v > $maior){
           // $ maior = $v;
        //}
        //if ($v < $menor){
          //  $menor = $v;
        //} 
    //}

    // Cria um vetor do menor valor até o maior valor de outro array
    $lista = array();
    while($menor <= $maior){
         $lista[] = $menor;
         $menor++;
    }

    //Verificação de existência entre dois arrays
    $falta = array_diff( $lista, $estatua);

    print_r( count($falta));
}

$statues = [6,3];
makeArrayConsecutive2($statues);