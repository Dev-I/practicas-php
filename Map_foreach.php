<?php

$cadena = array("b asd asd asd a weqw asd b qwesda cxsad qwewasd as a b");
// $n =  count($cadena);

foreach ($cadena as  $valor){
    $conv = explode(" ", $valor);
    $new = array_map(null, $conv);
    foreach ($new as $texto) {
        echo $texto. "\n";
        echo "<br>";
    }
    print_r(array_count_values($conv));
    echo "<br>";

}
 
?>