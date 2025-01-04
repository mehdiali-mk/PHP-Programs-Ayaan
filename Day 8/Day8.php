<?php
// Function to calculate grade
function calculateGrade($subject1, $subject2, $subject3) {
    // Calculate the average score
    $average = ($subject1 + $subject2 + $subject3) / 3;

    // Determine the grade based on the average
    if ($average > 75) {
        $grade = "A";
    } elseif ($average > 60) {
        $grade = "B";
    } elseif ($average > 40) {
        $grade = "C";
    } else {
        $grade = "Fail";
    }

    return $grade;
}

// Example input for three subjects
$subject1 = 85;
$subject2 = 72;
$subject3 = 58;

// Calculate and display the grade
$grade = calculateGrade($subject1, $subject2, $subject3);
echo "The grade for the student is: $grade\n";
?>
