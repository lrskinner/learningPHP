<?php
echo date( 'F d, Y' );

function is_palindrome($string) {
    $pal_check = ($string == strrev($string));
    return $pal_check;
};

$check_string = 'wow';

if(is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
};
