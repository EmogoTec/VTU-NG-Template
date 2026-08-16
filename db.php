<?php
/**
 * EMOGO COMPUTER AND GENERAL SERVICES - Database Connection
 * Updated: Set Timezone to Africa/Lagos
 */

// Set PHP application timezone
date_default_timezone_set('Africa/Lagos');

$db_host = 'localhost';
$db_user = 'YOUR ADMIN USER';
$db_pass = 'YOUR_PASSWORD_HERE'; 
$db_name = 'DATABASE NAME';   

// Connect
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Force MySQL server to use the same timezone for all queries
mysqli_query($conn, "SET time_zone = '+01:00'");
?>
