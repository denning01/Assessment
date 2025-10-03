<?php
/*
 Task 1a:
 Difference between == and === in PHP
 -------------------------------------
 - `==` (Equality Operator): compares only values, type conversion may occur.
 - `===` (Strict Equality Operator): compares both values and data types.
*/

// Examples with ==
var_dump(5 == "5");   // true (string "5" converted to int 5)
var_dump(0 == false); // true (false converted to int 0)

// Examples with ===
var_dump(5 === "5");   // false (int vs string)
var_dump(0 === false); // false (int vs boolean)
var_dump(5 === 5);     // true (same value and same type)
?>