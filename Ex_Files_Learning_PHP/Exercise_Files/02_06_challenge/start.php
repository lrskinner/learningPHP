<?php
$min = 1;
$max = 50;
// $guess = 5; //Change this value to test!
// $num = 16; // Change this value to test!
// $result = 0;

// If you really want to go nuts, try this:
$num = rand($min, $max);
$guess = rand(0, 100);

// IF STATEMENT VERSION
// if ($num == $guess) {
//     echo 'You guessed correctly!';
// } elseif ($num < $guess) {
//     echo "Your guess of $guess is too high";
// } elseif ($num > $guess) {
//     echo "Your guess of $guess is too low";
// };

// SWITCH CASE VERSION
switch ($num) {
    case $guess > $max || $guess < $min:
        echo "<h3>Please enter a number between 1 - 50</h3>";
        break;
    case $num == $guess:
        echo '<h3>You guessed correctly!</h3>';
        break;
    case $num < $guess:
        echo "<h3>Your guess of $guess is too high</h3>";
        break;
    case $num > $guess:
        echo "<h3>Your guess of $guess is too low</h3>";
        break;
}

print_r($num);