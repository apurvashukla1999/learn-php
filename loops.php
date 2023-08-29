<?php
$counter = 0;
while ($counter < 10) {
    echo $counter;
    $counter++;
}
/*
$counter = 10;
do {
    echo $counter;
    $counter++;
} while ($counter < 10);
*/
// do while loop

//foreach loop
$list = ['a', 'b', 'c'];
foreach ($list as $value) {
    echo $value;
}

// key value loop foreach
/*
 * $list = ['a', 'b','c'];
 * foreach ($list as $key => $value) {
 *  echo $key;
 * }
 */

//for loop
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
//array loop example
/*
 * $list = ['a', 'b', 'c'];
 * for ($i = 0; $i < count($list); $i++) {
 *  echo $list[$i];
 * }
 */
//using break to stop the loop
for ($i = 0; $i < count($list); $i++) {
    if($list[$i] == 'b') {
        break;
    }
    echo $list[$i];
}
//using continue to skip forward
for ($i = 0; $i < count($list); $i++) {
    if($list[$i] == 'b') {
        continue;
    }
    echo $list[$i];
}