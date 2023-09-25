<?php
//Task_4 Multidimensional Array
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 88, "English" => 95, "Science" => 90),
    array("Math" => 75, "English" => 80, "Science" => 85)
);

function calculateAverageGrades($gradesArray) {
    $averages = array();
    
    foreach ($gradesArray as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averages[] = $average;
    }
    
    return $averages;
}

// Call the function with the $studentGrades array as an argument
$studentAverages = calculateAverageGrades($studentGrades);

// Print the average grades for each student
for ($i = 0; $i < count($studentAverages); $i++) {
    echo "Student " . ($i + 1) . " Average Grade: " . $studentAverages[$i];
    echo "\n";
}
?>
