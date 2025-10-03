<?php
/*
 Task 1c:
 Difference between Session and Cookie in PHP
 --------------------------------------------
 - A Cookie stores data on the client’s browser and sends it back with each request.
   It can be modified by the user, making it less secure.
 - A Session stores data on the server. Only the session ID is stored in the client’s cookie
   to track the session, making it more secure.

 Real-world use cases:
 - Cookie: Remembering a user's language preference or "Remember Me" login details.
 - Session: Keeping a user logged in after successful authentication.
*/

// Example: Cookie
setcookie("language", "English", time() + (86400 * 30), "/"); 
// Stores preference for 30 days

// Example: Session
session_start();
$_SESSION["username"] = "Denning"; 
// Keeps the user logged in until the session ends
?>
