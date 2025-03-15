<?php
// Function to check if a number is odd or even
function checkOddOrEven($number) {
    if ($number % 2 == 0) {
        return "$number is Even";
    } else {
        return "$number is Odd";
    }
}

// Example input
$number = 20; // Change this value to test with other numbers

// Check and display whether the number is odd or even
$result = checkOddOrEven($number);
echo $result.".";

// here it will display "Number is Even.";
?>
