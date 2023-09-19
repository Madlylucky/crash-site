<?php

/* PHP Script for Registering Accounts */

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Validate your Email");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 Characters long");
}


if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["pass_confirm"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

echo "Hello this is a test";

print_r($_POST);
var_dump($password_hash);

?>