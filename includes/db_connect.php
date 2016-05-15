<?php

// Hostname connection constant
define("HOSTNAME",  "patnet.ddns.net");

// Database connection constants
define("DB_USERNAME",  "rbpatrick");
define("DB_PASSWORD",  "Kirito95!");
define("DB_NAME",    "rbpatrick");

// Database connect
$db = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection to database
if (!$db) {
    die("Database connection failed: ".mysqli_connect_error());
}

?>
