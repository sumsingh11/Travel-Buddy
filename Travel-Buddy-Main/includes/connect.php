<?php
// Establishing connection to the database
 $connect = mysqli_connect(
    'sql110.infinityfree.com',  // Hostname
    'if0_38491123',             // Username
    'SkKs1W40YX1x2',            // Password (insert your real password)
    'if0_38491123_discoverdash'          // Database name (replace XXX with the actual database suffix)
);

// Checking if connection is successful
if (!$connect) {
    // Display an error message and terminate the script if connection fails
    die("Connection failed: " . mysqli_connect_error());
}