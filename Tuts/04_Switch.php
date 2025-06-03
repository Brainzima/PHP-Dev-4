<?php
// create a variable to hold the day number and display the day name
$dayNumber = 8; // Example day number (1-7)
switch ($dayNumber) {
    case 1:
        $dayName = "Monday";
        break;
    case 2:
        $dayName = "Tuesday";
        break;
    case 3:
        $dayName = "Wednesday";
        break;
    case 4:
        $dayName = "Thursday";
        break;
    case 5:
        $dayName = "Friday";
        break;
    case 6:
        $dayName = "Saturday";
        break;
    case 7:
        $dayName = "Sunday";
        break;
    default:
        $dayName = "Invalid day number";
}
// Display the day name
echo "The day number $dayNumber corresponds to: $dayName";
?>