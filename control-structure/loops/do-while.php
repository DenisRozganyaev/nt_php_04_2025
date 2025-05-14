<?php
$students = ['John', 'Jane', 'Bob'];
$length = count($students);
$step = 0;

do {
    d($students[$step]);
    $step++;
} while ($step < $length);

