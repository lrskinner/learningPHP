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
if ( $a > $b ) {
    echo "<p>$a is greater than $b</p>";
} else if ( $b > $a ) {
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
