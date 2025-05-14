<?php

$data = [
    'name' => 'John',
    'age' => 25,
    'address' => [
        'street' => 'Main Street',
        'city' => 'New York',
    ]
];

//foreach ($_SERVER as $key => $value) {
//    if (preg_match('/^HTTP_/', $key)) {
//        d("$key => $value");
//    }
//}

foreach ($data as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            if ($k === 'city') {
                continue 2;
            }
            echo "<pre>$k ====> ". print_r($v, true) .'</pre>';
        }
    }
    d($value);
}
