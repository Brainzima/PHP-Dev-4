<?php date_default_timezone_set("Asia/Kolkata"); ?>
<?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
?>

<?php
// Get the current date
$currentDate = date("d-m-Y");
echo "Current Date: " . $currentDate . "<br>";
$currentDate = date("D-m-Y");
echo "Current Date: " . $currentDate . "<br>";
$currentDate = date("D-M-Y");
echo "Current Date: " . $currentDate . "<br>";
$currentDate = date("F, D(d), Y");
echo "Current Date: " . $currentDate . "<br>";

// Get the current time
$currentTime = date("H:i:s");
echo "Current Time: " . $currentTime . "<br>";
$currentTime = date("g:i:s");
echo "Current Time: " . $currentTime . "<br>";
$currentTime = date("H:i:s A");
echo "Current Time: " . $currentTime . "<br>";

// Create a date
$myDate = date_create("2023-01-01");
echo "Created Date: " . date_format($myDate, "Y-m-d") . "<br>";

// Modify the date
date_modify($myDate, "+1 month");
echo "Modified Date: " . date_format($myDate, "Y-m-d") . "<br>";

// // Get the difference between two dates
// $startDate = date_create("2023-01-01");
// $endDate = date_create("2023-12-31");
// $diff = date_diff($startDate, $endDate);
// echo "Difference: " . $diff->format("%R%a days") . "<br>";

$dob = date_create("2007-03-27");
$today = date("Y-m-d");
$diff = date_diff($dob, date_create($today));
echo "Your Age Till Now: " . $diff->format("%R%a days") . "<br>";
?>