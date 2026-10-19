<?php

// everything arrays in php
$fruits = array("banana", "apple", "pineapple", "mango",);
$people = ["Samuel", "Nii", "Odoi",];

//printing elements in an array
echo $fruits[1];
echo $fruits[4];

// assigning elements to an array
$fruits[4] = "orange";
array_push($fruits, "kiwi", "watermelon"); //only works for indexed arrays
print_r($fruits);

// array manipulations

// replaciing elements in an array
$fruits[0] = "grape";

// removing elements in an array (deleting the content of that element)
unset($fruits[2]);

// totally removing an element in an array which then automatically re-indexes the array
array_splice($fruits, 0, 1);

// adding new elements to an array
array_splice($fruits, 2, 0, "strawberry");

// adding two arrays together
array_splice($fruits, 2, 0, $people);


// associative arrays
$tasks = [
    "laundry" => "Samuel",
    "dishes" => "Kish",
    "cooking" => "Shirley",
    "dog care" => "Samson",
];

echo $tasks["dishes"];

// manipulating associative arrays
$tasks["scrubbing"] = "Emmanuel"; //adding an element

//prints entire array including keys and values
print_r($tasks);

// count number of elements in an array
echo count($tasks);

// sort array in asscending order (whether alphabets or numbers)
sort($tasks);
print_r($tasks); // this then prints it as an array and not an associative array

// multi-dimensional arrays
$food = [
    array("Bruno", "Sasha"),
    "FRUITS" => array("Apple", "Mango",),
    "MEAT" => array("Beef", "Chicken",),
    "VEGETABLES" => array("Carrot", "Cabbage",),
    "Fufu",
    "Jollof Rice",
];

// printing elements in a multi-dimensional array
echo $food[0][1];
echo $food[4];
echo $food["vegetables"][0];
