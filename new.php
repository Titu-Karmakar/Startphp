<?php
define('PI', 3.2426); //Constant 
echo "hello";
$name = 'Bangladesh';
$my_name = 'Titu karmakar';

echo $name;
echo "\n";
echo "Hello {$name}\nMy name is {$my_name}\n";
echo "value of PI = ".PI ; // Constant Value 
echo "\n";
Var_dump( $name);  // Variable define
$fname = "Titu";
$lname = "Karmakar";
printf(" His name is %s", $my_name); // Use of printf
echo "\n";
printf("His %s name is %s %s","full",$fname, $lname);
$planet1 = "Mercury";
$planet2 = "gupeter";
printf("The smallest plant %s and the biggest planet is %s \n", $planet1, $planet2);  // planet 1 ans 2 are argument 

// Plus Minus Goon Vhag
/* BODMAD
B = Bracket
O = Odd (maybe modulas)
D = Division 
M = Multiplication
A = Addition 
S = Subtraction */

// Variable Swaping 
$mname = "Kanak";
printf('My name is %3$s  %1$s  %2$s ' , $fname, $lname, $mname); // Doller sign use korle collo ekta hobe ( ' ) 

printf(' The binary is equivalent of %1$d is %1$b' , 12);

$n = 45.356;
printf("%.2f", $n); // dosomic er por koyta ghor hobe 
echo "\n";

$n = 4556.356;
printf("%06d", $n); // dosomic er age 
echo "\n";

printf("%08.2f \n",$n); // age and pore

$output = sprintf("His name is %s %s", $fname, $lname); // sprintf

echo $output;
echo strtoupper($output);  // we can add processing 



