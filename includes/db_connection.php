<?php

//1. create a database connection
define("DB_SERVER", "localhost");
define("DB_USER", "moraycreative");
define("DB_PASS", "Spartan1!");
define("DB_NAME", "321cognition");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//Test if connection occured.
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
    );
}
?>