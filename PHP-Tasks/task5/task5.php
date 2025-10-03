<?php
/*
 Task 5: Date & Applied Logic
 ----------------------------
 a) Get today’s date in YYYY-MM-DD format
 b) Get tomorrow’s date
 c) Check if repayment date = tomorrow
*/

// a) Today’s date
$today = date("Y-m-d");
echo "Today: " . $today . "\n";

// b) Tomorrow’s date
$tomorrow = date("Y-m-d", strtotime("+1 day"));
echo "Tomorrow: " . $tomorrow . "\n";

// c) Check repayment date
$repayment_date = $tomorrow; // Example value
if ($repayment_date === $tomorrow) {
    echo "Repayment is tomorrow.\n";
}
?>
