<?php

$DEBUGGING = TRUE;

// DEV
$DB_USER = 'root';
$DB_PASS = 'p@$$w0Rd';
//
// LIVE
//$DB_USER = "merlin";
//$DB_PASS = "aV@l0n20";

// same for both LIVE & DEV
$DB_HOST = '127.0.0.1:3306';
$DB_NAME = 'polestar';

//Define the maximum number of failed attempts to ban brute force attackers
$maxfailedattempt = 3;

//Define session timeout in seconds
$sessiontimeout = 180;

// setup DB connection
$DB_CONN = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// first, check to make sure the connection to MySQL DB was successful
if (mysqli_connect_errno() != 0) {
    
    $errorMsg = 'Failed to connect to MySQL database: ' . mysqli_connect_error();
    
    if ($DEBUGGING) {
        die($errorMsg);
    }
}
