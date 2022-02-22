<?php 

/***********************************
 * 
 *  Objetivo: arquivo para criar funções de separações de par e impar
 *  Data: 22/02/2022
 *  Autor:Nathalia Ramos
 *  Versão: 1.0
 ***********************************/
    
 $resultado = numerosParesImpares(10, 20);
 echo("<pre>");
 var_dump($resultado);
 echo("</pre>");
 //Função para separar uma sequencia de numeros pares
 function numerosPares ($numeroInicial, $numeroFinal) {

     //recebe os dados de argumento da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $pares = array();
    $cont = (int) 0;


    while ($numInicial <= $numFinal) {
        
        if($numInicial %2 == 0){ 
            $pares [$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
        return $pares;
 }

 //Função para separar uma sequencia de numeros impares
 function numerosImpares ($numeroInicial, $numeroFinal) {

     //recebe os dados de argumento da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $impares = array();
    $cont = (int) 0;


    while ($numInicial <= $numFinal) {
        
        if($numInicial %2 == 1){ 
            $impares [$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
        return $impares;
 }

function numerosParesImpares ($numeroInicial, $numeroFinal) {
    //Recebe os dados dos argumentos da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;

    //Variaveis para criar os arrays individuais (pares e impares)
    $pares = array();
    $impares = array();
    $paresImpares = array();
    $contImpar = (int) 0;
    $contPar = (int) 0;
    
    //Repetição para validar uma sequencia de pares e imapares
    while($numInicial <= $numFinal) {

        //Verifica se o numero é par (==0)
        if ($numInicial %2 ==  0) {
            $pares [$contPar] = $numInicial;
            $contPar++;

         //Monta a lista de numeros impares (caso !=0)
        }else {
            $impares [$contImpar] = $numInicial;
            $contImpar++;
        }
            $numInicial++;
    }
    //Criamos um array para armazenar os dois arrays individuais (pares e impare)
    //Criamos uma chave dentro do array chamada "Pares" para identificar a lista dos pares
        //e "Impares" para identificar a lista do impares
    $paresImpares = array(
        "Pares" => $pares,
        "Impares" => $impares
    );

    return $paresImpares;
}


?>