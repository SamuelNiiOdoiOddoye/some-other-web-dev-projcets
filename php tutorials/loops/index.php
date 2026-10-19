<?php

// for loops in php
for ($i = 0; $i <= 10; $i++) {
    echo "The number is iteration number : " . $i . "<br>" . "<br>";
}
echo "<br>" . "<br>";

//declaring a general condition variable
$test = 0;

// while loops in php
$boolean = true;
while ($boolean) {
    echo $boolean . " This is a while loop that runs only once because the boolean is set to false after the first iteration.<br>";
    $boolean = false;
}

// do while loops in php
do {
    echo "This is a do while loop that runs only once because the condition is set to false.<br>";
    $test++;
} while ($test < 10);


// foreach loops in php
$colors = array("Red", "Green", "Blue", "Yellow");
foreach ($colors as $color) {
    echo $color . "<br>";
}

// foreach loops with associative arrays in php
$fruitColors = array("Apple" => "Red", "Lime" => "Green", "BlueBerry" => "Blue", "Banana" => "Yellow");
foreach ($fruitColors as $fruit => $color) {
    echo "This is a fruit color : " . $fruit . " is " . $color . "<br>";
}

// foreach loops with key and value in php
foreach ($fruitColors as $fruit => $color) {
    echo "The key is : " . $fruit . " and the value is : " . $color . "<br>";
}
