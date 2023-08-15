<?php

$first = [
    "first_name" => "Tito"
];

$last = [
    "last_name" => "Sulano"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Tito",
    "last_name" => "Sulano"
];

$b = [
    "last_name" => "Sulano",
    "first_name" => "Tito"
];

var_dump($a == $b);
var_dump($a === $b);

?>