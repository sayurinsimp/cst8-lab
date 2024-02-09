<?php
$arrayNumbers = array(0, 1, 2, 3, 4, 5);
$implodedArrayNumbers = implode(', ', $arrayNumbers);
echo $implodedArrayNumbers;

echo "\n";

$numToInsert = array(8);
array_splice($arrayNumbers, 3, 0, $numToInsert);
$implodedArrayNumbers = implode(', ', $arrayNumbers);
echo $implodedArrayNumbers;
?>
