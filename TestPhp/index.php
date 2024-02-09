<?php

// PROBLEM #1
$arrayWords = array("quick", "brown", "fox", "dog");
echo "The $arrayWords[0] $arrayWords[1] $arrayWords[2] jumps over the lazy $arrayWords[3]\n";
echo "\n";

// PROBLEM #2

$arrayNumbers = array(0, 1, 2, 3, 4, 5);

foreach ($arrayNumbers as $number){
    echo "$number, ";
}
echo "\n";

$numToInsert = array(19);

array_splice($arrayNumbers, 3, 0, $numToInsert);

foreach ($arrayNumbers as $number){
    echo "$number, ";
}
echo "\n";

// PROBLEM 3

$countries = array("a" => "Switzerland", "c" => "Japan", "b" => "Canada");
foreach ($countries as $country){
    echo "$country ";
}
echo "\n\n";

asort($countries);
echo "Ascending order by value:\n";
foreach ($countries as $country){
    echo "$country ";
}
echo "\n";

arsort($countries);
echo "Descending order by value:\n";
foreach ($countries as $country){
    echo "$country ";
}
echo "\n";


ksort($countries);
echo "Ascending order by key:\n";
foreach ($countries as $country){
    echo "$country ";
}
echo "\n";

krsort($countries);
echo "Descending order by key:\n";
foreach ($countries as $country){
    echo "$country ";
}

// PROBLEM 4

$letterNumPair = array('a' => 1,
                       'b' => 3,
                       'c' => 4,
                       'd' => 8,
                       'e' => 2,
                       'f' => 7);

foreach ($letterNumPair as $k => $v){
    echo "$k" . " => " . "$v";
}

// PROBLEM 5



// PROBLEM 6

$jsonstring = '[{"name":"Grigori Rasputin","age":47,"email":"rarasputin@pewpew.com"}]';
print_r(json_decode($jsonstring, true));
?>