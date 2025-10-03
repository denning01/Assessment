<?php
/*
 Task 1b:
 Difference between include and require in PHP
 ---------------------------------------------
 - `include`: inserts code from another file. If the file is missing,
   PHP shows a warning but continues executing the rest of the script.
 - `require`: also inserts code from another file. If the file is missing,
   PHP throws a fatal error and stops executing the script.
*/

// Example with include
// include "header.php"; // Warning if "header.php" is missing, script continues
echo "This will still run even if header.php is missing.";

// Example with require
// require "header.php"; // Fatal error if "header.php" is missing, script stops
echo "This will NOT run if header.php is missing.";
?>
