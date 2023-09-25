<?php
//Task_1
$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);

// Print the age of the student
echo "The age of the student is: " . $student['age'];
echo "\n";





//Task_2
// Check if the 'grade' key exists in the array
if (array_key_exists('grade', $student)) {
    echo "The 'grade' key exists in the array:";
    echo "\n";
    foreach($student as $key=>$value){
        echo $key .": ".$value;
        echo "\n";
    }
} else {
    echo "The 'grade' key does not exist in the array.";
}
echo "\n";




//Task_3 
$numbers = array(100, 200, 50, 40, 50);

// Use a foreach loop to print each value in the array
foreach ($numbers as $value) {
    echo $value ;
    echo "\n";
}




//Task_4
$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

// Define a custom callback function to filter names starting with 'M'
function startsWithM($name) {
    return strtoupper(substr($name, 0, 1)) === 'M';
}

// Use array_filter() with the custom callback function
$filteredNames = array_filter($names, 'startsWithM');

// Print the filtered names
echo "Names that start with 'M':";
echo "\n";
foreach ($filteredNames as $name) {
    echo $name ;
    echo "\n";
}




//Task_5
$originalString = 'Hello, World!';

// Use strrev() to reverse the string
$reversedString = strrev($originalString);

// Print the reversed string
echo $reversedString;


?>
