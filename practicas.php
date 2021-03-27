<?php

//voltear arreglo 
function imprimirAlreves(&$arreglo,$n){
    $rever = array_reverse($arreglo);
    for ($i=0; $i <$n ; $i++) { 
        echo $rever[$i]. "<br>";
    }
}

//funcion de un solo corritdo a la izquierda
function unSoloCorrido(&$arreglo,$n){
    $aux = $arreglo [0];
    for ($i=0; $i < $n-1; $i++) { 
    $arreglo[$i] = $arreglo[$i+1];
    }
    $arreglo[$n-1]= $aux;
}

//funcion de el num de espacios corridos a la izquierda
function rotarNveces(&$arreglo,$d,$n){
    for ($i=0; $i <$d ; $i++) { 
        unSoloCorrido($arreglo,$n);
    }
}

// Funcion para imprimir el array final
function imprimir(&$arreglo, $n){
    for ($i=0; $i <$n; $i++) { 
        echo $arreglo[$i]."<br>";
     }
}

$arreglo = array("h","e","l","l","o");
$n = count($arreglo); //tamaño del arreglo
$d = 3;//numero de espacios recorridos 

imprimirAlreves($arreglo,$n);
echo "----------------------- <br>";
rotarNveces($arreglo,$d,$n);
imprimir($arreglo,$n);



echo "<br>";


//----------------------------------------------//
//----------codigo de pureba xd----------------//
//----------------------------------------------//

//imprimirAlreves($arreglo, $n);

// $rever = array_reverse($arr);
// for ($i=0; $i <$n ; $i++) { 
//     echo $rever[$i];
// }
//----------------------------------------------//

// for ($b=0; $b <$d; $b++) { 
//     $aux = $arr[0];
//     for ($i = 0; $i < $n-1; $i++){
//          $arr[$i] = $arr[$i + 1];
//     }
//     $arr[$n-1] = $aux;
// }
// for ($i=0; $i <= $n ; $i++) { 
//     echo $arr[$i];
// }

?>
