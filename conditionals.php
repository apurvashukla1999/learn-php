<?php
$age = 15;

if ($age > 22) {
    echo 'You are above 22.\n';
} elseif ($age > 18) {
    echo 'you are above 18.\n';
}  else {
    echo 'You are below 18.\n';
}


//switch statements
switch($age){
    case 15:
        echo "You are 15";
        break;
    case 16:
        echo 'You are 16.\n';
        break;
    case 17:
        echo 'You are 17.\n';
        break;
    case 18:
        echo 'You are 18';
        break;
    default:
        echo "You are $age.\n";
}
