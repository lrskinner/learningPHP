<?php

//VARIABLES
$greeting = 'Hello';
$planet = 'World';

echo $greeting . ' ' . $planet . '!';

echo "<pre>-------------------------------------------------</pre>";

echo PHP_EOL;

$a = 5;
$b = 66;

//IF ELSE STATEMENTS
if ($a > $b) {
    echo "<p>$a is greater than $b</p>";
} else if ($b > $a) {
    echo "<p>$b is greater than $a</p>";
} else {
    echo "<p>$a and $b appear to be equal</p>";
}

echo "<pre>-------------------------------------------------</pre>";

echo PHP_EOL;

//TERNARY OPERATOR

// $is_logged_in = false;
$is_logged_in = true;
$user = 'Leah';

// if ( $is_logged_in ) {
//     echo '<h3>Welcome back, user!</h3>';
// } else {
//     echo '<h3>Welcome to the site!</h3>';
// }

//ternary version of above if else statement
// ? = if, : = else
$message = $is_logged_in ? "<h1>Welcome back!</h1>" : "<h1>Hello there!</h1>";

//shorten it even more
$message = "Welcome" . ($is_logged_in ? " back, <b>$user!</b>" : "!");

$user = isset($user) ? $user : 'Jo';

//ELVIS OPERATOR
//even shorter with elvis operator
$user = $user ?: 'Jo';

echo $message;

//SWTICH STATEMENTS
// unlike if statements they don't terminate upon finding a true statement
// this is why break statements are crucial 
// default serves as catch all (else in else statement)
// you can group cases together

echo "<pre>-------------------------------------------------</pre>";

echo PHP_EOL;

//LOOPS

// $i = 0;
// do {
//     echo "<p>$i</p>";
//     $i++;
// } while ($i < 10);

// $i = 10;
// while ($i < 10) {
//     echo "<p>$i</p>";
//     $i++;
// }

// for ($i = 0; $i < 10; $i++) {
//     echo "<p>$i</p>";
// }

echo "<pre>-------------------------------------------------</pre>";

echo PHP_EOL;

//FUNCTIONS

function is_palindrome($string) {
    // refactored version of lines 98-101
    // convert string to lowercase and remoce spaces
    $string = str_replace(' ', '', strtolower($string));
    // check string against that same string reversed
    return ($string == strrev($string));


    // $string = strtolower($string);
    // $string = str_replace(' ', '', $string);
    // $pal_check = ($string == strrev($string));
    // return $pal_check;
};

$check_string = 'Wow';

if(is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
};

echo "<pre>-------------------------------------------------</pre>";

echo PHP_EOL;


//CLASSES

class Person {
    var $name;
    var $age;
    var $birthday = false;
  
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
};
