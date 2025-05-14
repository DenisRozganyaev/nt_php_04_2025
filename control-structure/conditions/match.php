<?php

$type = 'apple';

$result = match ($type) {
    'apple' => 'iOS',
    'samsung' => 'Android',
    'windows', 'other' => 'Windows Phone',
    default => 'Nokia'
};
