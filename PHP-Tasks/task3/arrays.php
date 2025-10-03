<?php
/*
 Task 3: Arrays & Logic
 ----------------------
 Given array of loans: $loans = [2000, 1500, 3000, 500, 4500];

 a) Find the highest loan
 b) Find the lowest loan
 c) Calculate the average loan
 d) Write a loop that prints only the loans above 2000
*/

// Loan amounts
$loans = [2000, 1500, 3000, 500, 4500];

// a) Find the highest loan
$highestLoan = max($loans);
echo "Highest Loan: " . $highestLoan . "\n"; // Expected: 4500

// b) Find the lowest loan
$lowestLoan = min($loans);
echo "Lowest Loan: " . $lowestLoan . "\n"; // Expected: 500

// c) Calculate the average loan
$averageLoan = array_sum($loans) / count($loans);
echo "Average Loan: " . $averageLoan . "\n"; // Expected: 2300

// d) Print loans above 2000
echo "Loans above 2000: \n";
foreach ($loans as $loan) {
    if ($loan > 2000) {
        echo $loan . "\n"; // Expected: 3000, 4500
    }
}
?>
