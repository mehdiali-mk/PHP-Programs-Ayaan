<?php
// Function to find the minimum number among three numbers
function findMinNumber($num1, $num2, $num3) {
    if ($num1 <= $num2 && $num1 <= $num3) {
        return $num1;
    } elseif ($num2 <= $num1 && $num2 <= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

// Example usage
$number1 = 10; // First number
$number2 = 25; // Second number
$number3 = 5;  // Third number

// Call the function and display the result
$result = findMinNumber($number1, $number2, $number3);
echo "The minimum number is: " . $result;
?>
