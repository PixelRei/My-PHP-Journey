<?php
//you can create an array in this way
$array = ["Mazda", "Toyota", "Nissan", "BMW", "Audi", "Mercedes"];
//or you can also create it in this other way
$otherArray = array("Mazda", "Toyota", "Nissan", "BMW", "Audi", "Mercedes");
//the length
echo count($array) . "\n";
//to see if an item is in the array
echo in_array("Ferrari", $array)."\n";
//to shuffle the items inside the array
shuffle($array);
//to reverse the array
array_reverse($array);
//if you want to merge two or more arrays 
//array_merge(array1, array2);

//to slice an array like you do with strings (substr())
$arraysliced = array_slice($array, 0, 3);
print_r($arraysliced);
?>