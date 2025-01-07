<?php
// This is a single-line comment

/*
This is a multi-line comment
*/

// PHP code starts with <?php and ends with ?--->

// Displaying output
echo "Hello, World!"; // Outputs: Hello, World!

// Variables in PHP
$greeting = "Hello"; // String variable
$number = 42; // Integer variable

// Concatenation of strings
echo $greeting . ", World!"; // Outputs: Hello, World!

// Conditional statements
if ($number > 40) {
    echo "The number is greater than 40"; // Outputs: The number is greater than 40
} else {
    echo "The number is 40 or less";
}

// Loops in PHP
for ($i = 0; $i < 5; $i++) {
    echo $i; // Outputs: 01234
}

// Functions in PHP
function add($a, $b) {
    return $a + $b;
}

echo add(5, 3); // Outputs: 8

// Arrays in PHP
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[1]; // Outputs: Banana

// Associative arrays
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo $age["Ben"]; // Outputs: 37

// Looping through an array
foreach ($fruits as $fruit) {
    echo $fruit; // Outputs: AppleBananaCherry
}
?>