<?php 

// el motivo del for es por que las instruccionesla entrada esta como array asi que lo tome en cuenta 
$cadena = array("b asd asd asd a weqw asd b qwesda cxsad qwewasd as a b");
 $n =  count($cadena);


for ($i=0; $i <$n ; $i++) { 
   $conv = explode(" ", $cadena[$i]);
    $p = count($conv);
    
    for ($a=0; $a <=$p ; $a++) { 
        echo $conv[$a]."<br>" ;
       }
       print_r(array_count_values($conv));
    echo "<br>";

}

function cubo($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cubo", $a);
print_r($b);

// Esto hace que $b contenga:

// Array
// (
//     [0] => 1
//     [1] => 8
//     [2] => 27
//     [3] => 64
//     [4] => 125
// )

?>
