<?php
    //Task_2 Array Manipulation
$numbers = range(1, 10); // Creates an array containing numbers from 1 to 10

function removeEvenNumbers(&$numberArray) {
    $numberArray = array_filter($numberArray, function($num) {
        return $num % 2 != 0; // Keep only numbers that are not even
    });
}

// Call the function with the $numbers array as an argument
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
?>
