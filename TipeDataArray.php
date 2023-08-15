<?php

$values = array(10, 9, 8, 7);
var_dump($values);

$names = ["Tito", "Sulano"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Hoya";
var_dump($names[0]);

unset($names[1]); // menghapus array pada index ke 1
var_dump($names);

$names[] = "Tito"; //menabah data pada array
var_dump($names);

var_dump(count($names)); //mneghitung panjang array/ jumlah data

//MAP
$tito = array(
        "id" => "tito",
        "name" => "Tito Sulano",
        "age" => 21
);

var_dump($tito);

//Array dalam Array
$budi = array(
    "id" => "budi",
    "name" => "budi doremi",
    "age" => 21,
    "address" => array(
        "country" => "Indonesia",
        "city" => "Jakarta"
    )
);

var_dump($budi);
var_dump($budi["address"]["country"]);

?>