<?php

// everything functions in php

$string_1 = "Hello, World!";

// string manipulation functions in PHP
echo "This is string_1 : ", $string_1;
echo "<br>";
echo "This prints out the length of the string_1 : ";
echo strlen($string_1); // prints the length of the string
echo "<br>";

echo "This prints out the position of certain characters in the string_1 (in this case the position of 'o' :  ";
echo strpos($string_1, "o"); // prints the position of the first occurrence of "o" in the string
echo "<br>";

echo "This prints out the position of certain word in the string_1 (in this case the position of 'World' :  ";
echo strpos($string_1, "World"); // prints the position of the word "World" in the string
echo "<br>";

echo "This replaces certain word in the string_1 (in this case 'World' is replaced with 'Samuel') :  ";
echo str_replace("World", "Samuel", $string_1); // replaces "World" with "Samuel" in the string
echo "<br>";

echo "This changes certain part of the string_1 to lowercase :  ";
echo strtolower($string_1); // converts the string to lowercase
echo "<br>";

echo "This changes certain part of the string_1 to uppercase :  ";
echo strtoupper($string_1); // converts the string to uppercase
echo "<br>", "<br>";

echo $string_1;
echo "<br>", "<br>";
echo "This prints out from the 2nd element and the next element of the string_1 using substr function :  ";
echo substr($string_1, 2, 2); // prints a substring starting from position 2 with length 2, which is "ll"
echo "<br>";
echo "This prints out from the 2nd element to the 2nd last element of the string_1 using substr function :  ";
echo substr($string_1, 2, -2); // prints a substring starting from position 2 to 2 characters from the end, which is "llo, Wor"
echo "<br>";

echo "This splits the string_1 into an array using space as the delimiter :  ";
print_r(explode(" ", $string_1)); // splits the string into an array using space as the delimiter

echo "<br>", "<br>";

$number = -5.5;

// number and integer manipulation functions in PHP
echo "This is the absolute value of number -5.5 :  ";
echo abs($number); // prints the absolute value of the number
echo "<br>";

echo "This is the rounded value of number 4.3 :  ";
echo round(4.3); // rounds the number to the nearest integer
echo "<br>";

echo "This is the rounded up value of number 4.3 :  ";
echo ceil(4.3); // rounds the number up to the nearest integer
echo "<br>";

echo "This the value of 2 raised to the power of 3 :  ";
echo pow(2, 3); // raises 2 to the power of 3
echo "<br>";

echo "This is the square root of 16 :  ";
echo sqrt(16); // prints the square root of 16
echo "<br>";

echo "This is a random number between 1 and 100 :  ";
echo rand(1, 100); // prints a random number between 1 and 10
echo "<br>", "<br>";

// date and time manipulation functions in PHP
echo "Prints the current date and time information as an associative array : ";
print_r(getdate()); // prints the current date and time information as an associative array
echo "<br>", "<br>";

echo "Prints out the current date and time in the specified format : ";
print_r(date("Y-m-d H:i:s")); // prints the current date and time in the specified format
echo "<br>", "<br>";

echo "Prints out the current date in a more readable format : ";
print_r(date("l, F j, Y")); // prints the current date in a more readable format
echo "<br><br>";

echo "Prints out the current time in 12-hour format with am/pm : ";
print_r(date("h:i:sa")); // prints the current time in 12-hour format with am/pm
echo "<br><br>";

echo "Prints out the current time in 24-hour format : ";
print_r(date("H:i:s")); // prints the current time in 24-hour format
echo "<br><br>";

echo "Prints out the current date in a shorter format : ";
print_r(date("D, M j, Y")); // prints the current date in a shorter format
echo "<br><br>";

echo "Prints out the current date in YYYY-MM-DD format : ";
print_r(date("Y-m-d")); // prints the current date in YYYY-MM-DD format
echo "<br><br>";

echo "Prints out the current date in DD/MM/YYYY format : ";
print_r(date("d/m/Y")); // prints the current date in DD/MM/YYYY format
echo "<br><br>";
echo "<br><br>";

// array manipulation functions in PHP
echo "Array manipulation functions in PHP";
echo "<br>";
$array = ["apple", "banana", "cherry"];
echo "This is the value of array : ";
print_r($array); // prints the original array
echo "<br>";
echo "<br><br>";

echo "Prints out the number of elements in the array : ";
echo count($array); // prints the number of elements in the array
echo "<br><br>";

echo "Prints out the sorted the array in ascending order : ";
sort($array); // sorts the array in ascending order
print_r($array); // prints the sorted array
echo "<br><br>";

echo "Prints the response if the variable is an array and prints 1(true) if it is : ";
echo is_array($array); // checks if the variable is an array and prints 1 (true)
echo "<br>";

echo "This adds kiwi to the end of the array and prints the new number of elements and the new entire array : ";
echo array_push($array, "kiwi"); // adds "kiwi" to the end of the array and prints the new number of elements
print_r($array); // prints the updated array
echo "<br><br>";

echo "This removes the last element in the array and prints the updated array : ";
array_pop($array); // removes the last element from the array
print_r($array); // prints the updated array
echo "<br><br>";

echo "This removes the first element in the array and prints the updated array : ";
array_shift($array); // removes the first element from the array
print_r($array); // prints the updated array
echo "<br>";

echo "This prints the array in reverse order : ";
print_r(array_reverse($array)); // prints the array in reverse order
echo "<br>";

echo "This merges the array with another array and prints the result : ";
echo "This merges the array with another array and prints the result : ";
print_r(array_merge($array, ["orange", "grape"])); // merges the array with another array and prints the result

// Date & Time
echo time(); // prints out the time
$date = "2004-11-15 00:00:00";
echo strtotime($date); // prints out the strtotime of the date  

// User Defined Functions in PHP
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

function sayHello($name) {
    echo "Hellow, " . $name . "!";
}

sayHello("Samuel");
echo "<br>";

// string $settingAsString = "This is a string set as a string data type.";

// declaring global variables in functions in php
$testnumber = 10;
function isOdd($testnumber) {
    global $testnumber;
    if ($testnumber % 2 == 1) {
        return true;
    } else {
        return false;
    }
}

// Scopes of Variables in PHP (Global and Local Scope)
$ScopeVar1Test = "This is a global variable.";

function testScopes($ScopeVar1Test) {
    // define a local variable
    $ScopeVar2Test = "This is a local variable.";

    //use the local variable
    echo $ScopeVar2Test;
    echo "<br>";
    //use the global variable
    echo $ScopeVar1Test;
    echo "<br>";

    //declaring the global variable inside the function
    global $ScopeVar1Test;
    echo $ScopeVar1Test . " This is accessed using the global keyword.<br>";

    //return the global variable using the $GLOBALS array
    return $GLOBALS['ScopeVar1Test'];
}

echo testScopes($ScopeVar1Test);

// Scopes in Php
function teststaticfunction() {
    // Declare a not static variable
    $NotstaticVar = 0;

    // DEclare a static variable
    static $staticVar = 0;

    // Increment of the not static variable
    $NotstaticVar++;

    // Increment of the static variable
    $staticVar++;

    // Use the static variable
    echo "This is the output of the not static variable: " . $NotstaticVar . "<br>";
    echo "This is the output of the static variable: " . $staticVar . "<br>";

    return $staticVar;
}

echo teststaticfunction();
echo teststaticfunction();
echo teststaticfunction();


// Constants in Php
define("MyFullName", "Samuel Nii Odoi Oddoye"); // defining a constant named My Full Name
define("PI", "3.14"); // defining a constant named PI

echo MyFullName; // using the constant My Full Name
echo "<br>";
echo PI; // using the constant PI
echo "<br>";

// Classes in PHP
