<?php

require_once 'vendor/autoload.php';

/**
 * NULL => null =>
 * BOOLEAN => bool => true | false | 1 | 0 | TRUE | FALSE
 * INTEGER => int => 10 | 5 | -500 | 0
 * FLOAT => float => -22.54 | 0.41 | 10.0
 * STRING => string => 'Test without variable' | "Test with $variable"
 * ARRAY => array => [] | array() => [5, 7, ['name' => 'John'], null, true, 2.55] |
     * [
     *      'name' => 'Mike',
     *      'courses' => [
     *          'php-basic',
     *          'php-laravel',
     *      ]
     * ] =====> $arrData['courses'][0]
 * object => object => $student->name, $student->courses[0]
 */

/**
 * /
 * *
 * +
 * -
 * ** -> multiplier
 */
//$variable = 11;
//
//$variable = $variable + 2; // $variable += 2;
//
//$variable = $variable + 1;
//$variable += 1;

/**
 * Increment / Decrement
 */

//$variable = 0;
//
////$variable++; // increment + 1
////$variable--; // decrement - 1
//
//d($variable++); // 0
//d($variable); // 1
//// $result = $variable++; => $result = $variable; $variable++;
//
//$prefix = 0;
//
//dd(++$prefix); // 1

d(4 == 4.0); // d((int)4 == (float)4.0); => == => 4 = 4.0
d(4 == '4'); // d((int)4 == (float)4.0); => == => 4 = 4.0

$a = 4; // int
$b = 4.0; // float

d($a === $b);// d((int)4 == (float)4.0); => === => 4 = 4.0 && int = float

dd(4 <=> 1);
