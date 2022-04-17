<?php
//? veriable changing
$name = "Hello World";
echo "{$name}\n";
$name = "Hello There";
echo "{$name}\n";
//? ..................

//? constant veriable not changing
define('PI', 123445);

echo "Value of PI = ".PI,"\n"; //? 1 way
echo constant('PI'); //? 2 way

$constant = 'constant';
echo "Value of PI = {$constant('PI')}"; //? 3 way

define('PI', 00000); //! Constant PI already defined
//? ..................
