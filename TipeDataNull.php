<?php

$name = "Tito";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null : ";
var_dump(is_null($name)); //Ngecek nilai null
echo "\n";

$contoh = "Tito";
unset($contoh); //otomatis varible contoh terhapus

?>