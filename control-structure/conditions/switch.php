<?php

$type = 'apple';

switch ($type) {
    case 'apple': {
        echo 'iOS';
    } break;
    case 'samsung':
        echo 'Android'; break;
    case 'test':
    case 'other':
    case 'windows':
        echo 'Windows Phone';
        break;
    default:
        echo 'Nokia';
}

//if ($age > 0 && $age < 18) {
//    echo 'You\'re kid';
//} else if ($age >= 18 && $age < 65) {
//    echo 'You\'re adult';
//} else if ($age >= 65) {
//    echo 'You\'re old';
//} else {
//    echo 'Who are you?';
//}
$age = 17;

switch (true) {
    case $age > 0 && $age < 18: echo 'You\'re kid'; break;
    case $age >= 18 && $age < 65: echo 'You\'re kid'; break;
    default: echo 'You\'re old';
}