<?php

$students = ['John', 'Jane', 'Bob'];
$groups = [2 => 'A', 1 => 'B', 0 => 'C'];

$lengthStudent = count($students);
$lengthGroups = count($groups) - 1;

for ($i = 0; $i < $lengthStudent; $i++) {
    d($students[$i]);
}

//$i = 0;
//for (; $i < $lengthStudent;) {
//    d($students[$i]);
//    $i++;
//}

//for ($i = 0, $y = $lengthGroups; $i < $lengthStudent, $y >= 0; $i++, $y--) {
//    d($students[$i], $groups[$y]);
//}