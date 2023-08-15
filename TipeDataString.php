<?php

//Single Quote
echo 'Name : ';
echo 'Tito Sulano';
echo "\n"; //Untuk Enter

//Double Quotes
echo "Name : ";
echo "Tito\t Sulano\n"; //Untuk TAB

//Multiline String
//Cara Heredoc
echo <<<Tito
Ini adalah contoh string yang sangat panjnag, 
dan juga gak perlu ngetik enter secara manual, 
"bisa quote" juga

Tito;

//Nowdoc
echo <<<'Tito'
Ini adalah contoh string yang sangat panjnag, 
dan juga gak perlu ngetik enter secara manual, 
"bisa quote" juga
Tito;

?>