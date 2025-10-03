<?php
/*
 Task 2: Functions & Loan Calculation
 ------------------------------------
 a) Write a PHP function loanRepayment($amount, $interestRate) that calculates 
    total repayment (amount + interest).
 b) Modify the function so that if the interest rate is not provided, 
    it defaults to 10%.
 c) Call the function with loanRepayment(5000) and loanRepayment(5000, 15) 
    and show the outputs.
*/

/*
 Function: loanRepayment
 Parameters:
   - $amount: The principal loan amount
   - $interestRate: Interest rate (default = 10%)
 Returns:
   - Total repayment (principal + interest)
*/
function loanRepayment($amount, $interestRate = 10) {
    $interest = ($amount * $interestRate) / 100;
    $totalRepayment = $amount + $interest;
    return $totalRepayment;
}

// Test cases
echo "Loan Repayment with default interest (10%): " . loanRepayment(5000) . "\n"; 
// Expected: 5500

echo "Loan Repayment with 15% interest: " . loanRepayment(5000, 15) . "\n"; 
// Expected: 5750
?>
