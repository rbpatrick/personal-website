<?php

// Database connection constants
define("HOSTNAME",  "patnet.ddns.net");
define("USERNAME",  "rbpatrick");
define("PASSWORD",  "Kirito95!");
define("DBNAME",    "rbpatrick");

$db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Check connection to database
if (!$db) {
    die("Database connection failed: ".mysqli_connect_error());
}

?>
