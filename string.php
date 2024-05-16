<?php

$strings = ["Hello", "World", "PHP", "Programming"];

 function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}



foreach ($strings as $string) {
    // Count vowels
    $vowelCount = countVowels($string);
    
    // Reverse string
    $reversedString = strrev($string);
    
    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
