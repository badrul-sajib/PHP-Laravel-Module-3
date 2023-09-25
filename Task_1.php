<?php
//Task_1 String Manipulation
$text = "The quick brown fox jumps over the lazy dog." ;
function stringManupulation($text){
    $lowerText = strtolower($text);
    $replaceWord = str_replace('brown','red', $lowerText);
    return $replaceWord;
    }
    
    echo stringManupulation($text);
?>
