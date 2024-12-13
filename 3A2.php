<?php
// Include this file in your main script using include or require.
{
    $inputString = $_POST['inputString'];
    $ch = $_POST['operation'];

    include 'string_operations.php';

    switch ($ch) 
    {
        case 'length':
            echo "Length of the string: " . findStringLength($inputString);
            break;

        case 'vowels':
            echo "Number of vowels: " . countVowels($inputString);
            break;

        case 'lower_title':
            echo "Converted string (Lowercase -> Title Case): " . convertToLowerAndTitleCase($inputString);
            break;

        case 'pad':
            echo "Padded string: " . padString($inputString);
            break;

        case 'remove_whitespace':
            echo "String without leading whitespaces: " . removeLeadingWhitespaces($inputString);
            break;

        case 'reverse':
            echo "Reversed string: " . reverseString($inputString);
            break;
    }

 function findStringLength($string) 
 {
    $length = 0;
    while (isset($string[$length])) 
    {
        $length++;
    }
    return $length;
 }

 function countVowels($string) 
 {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) 
    {
        if (in_array($string[$i], $vowels)) 
        {
            $count++;
        }
    }
    return $count;
 }

 function convertToLowerAndTitleCase($string) 
 {
    $lowerCase = strtolower($string);
    return ucwords($lowerCase);
 }

 function padString($string) 
 {
    echo "String padding is: ". $string,3,"*",STR_PAD_BOTH;
 }

 function removeLeadingWhitespaces($string) 
 {
    return ltrim($string);
 }

 function reverseString($string) 
 {
    return strrev($string);
 }

}
?>