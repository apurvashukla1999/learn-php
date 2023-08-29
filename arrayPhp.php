<?php
$list = [];
$list = array();
$numberList = [1,2];
$numberList = array(1,2);
$randomList = array(1, 'test');
$nestedArray = [1,[2,"Test"]];
//appending values to arrays
$appendList = ['a', 'b'];
$appendList[] = 'c';
//add array value to beginning of array instead
$array_unshift = ['b','c'];
array_unshift($array_unshift, 'a');
//count how many items are in array
print_r("Printing array_unshift\n");
print_r(($array_unshift));
//check if item is in array
in_array('b', $array_unshift);



