<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // 1. Count the number of vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

    // 2. Reverse the string
    $reversedString = strrev($string);

    // 3. Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
