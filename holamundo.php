<?php
// PHP program to rotate an array
// by d elements
 
/*Function to left Rotate arr[] 
of size n by 1*/
function leftRotatebyOne(&$arr, $n)
{
    $temp = $arr[0];
    for ($i = 0; $i < $n - 1; $i++){
        $arr[$i] = $arr[$i + 1];
     }
     $arr[$n-1] = $temp;
}
 
/*Function to left rotate arr[]
  of size n by d*/
function leftRotate(&$arr, $d, $n)
{
    for ($i = 0; $i < $d; $i++)
        leftRotatebyOne($arr, $n);
}
 
/* utility function to print
   an array */
function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i] . " ";
}
 
// Driver Code
$arr = array("h","e","l","l","o");
$n = sizeof($arr);
 
// Function calling
leftRotate($arr, 3, $n);
printArray($arr, $n);
 
// This code is contributed
// by ChitraNayal
?>
