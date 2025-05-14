<?php

$age = 5;

if ($age > 0 && $age < 18) {
    echo 'You\'re kid';
} else if ($age >= 18 && $age < 65) {
    echo 'You\'re adult';
} else if ($age >= 65) {
    echo 'You\'re old';
} else {
    echo 'Who are you?';
}

