<?php
    // create a function that checks if a sentence is a palindrome, using only basics and continue and break, REMEMBER NO STRING FUNCTIONS!!
    
    function isPalindrome($sentence){
        $length = strlen($sentence);

        for ($i = 0; $i < $length; $i++){
            $start = $sentence[$i];
            $end = $sentence[$length - 1 - $i];

            if ($start == ' ' || $end == ' ') {
                break;
            } else if ($start != $end) {
                return false;
            } else {
                continue;
            }
        }
        return true;
    }
    
    echo isPalindrome("was it a car or a cat i saw") ? "<p>is a palindrome</p>" : "<p>not a palindrome</p>";
    echo isPalindrome(" tacoo cat  ") ? "<p>is a palindrome</p>" : "<p>not a palindrome</p>";
    echo isPalindrome("rosebud rose") ? "<p>is a palindrome</p>" : "<p>not a palindrome</p>";
?>
