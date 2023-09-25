<?php
//Task_3 Array Sorting 
$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending(&$gradesArray) {
    rsort($gradesArray); // Sort the array in descending order
}

// Call the function with the $grades array as an argument
sortGradesDescending($grades);

// Print the sorted grades array
print_r($grades);
?>
