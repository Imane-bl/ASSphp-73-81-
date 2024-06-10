<?php
/*

filter_var  Function
This function is used to filter a variable with a specified filter.


$var = "example@example.com";

// Validate email
if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
    echo "This is a valid email address.";
} else {
    echo "This is not a valid email address.";
}



filter_input Function
This function gets an input variable (e.g., from $_GET, $_POST) and filters it.

php
Copier le code
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($email) {
    echo "This is a valid email address.";
} else {
    echo "This is not a valid email address.";
}





Commonly Used Filters
Validating Filters
FILTER_VALIDATE_BOOLEAN: Validates a boolean.
FILTER_VALIDATE_EMAIL: Validates an email address.
FILTER_VALIDATE_FLOAT: Validates a floating-point number.
FILTER_VALIDATE_INT: Validates an integer.
FILTER_VALIDATE_IP: Validates an IP address.
FILTER_VALIDATE_URL: Validates a URL.
Sanitizing Filters
FILTER_SANITIZE_EMAIL: Removes all illegal characters from an email address.
FILTER_SANITIZE_NUMBER_FLOAT: Removes all characters except digits, +, -, . and e.
FILTER_SANITIZE_NUMBER_INT: Removes all characters except digits, +, and -.
FILTER_SANITIZE_SPECIAL_CHARS: HTML-escapes special characters.
FILTER_SANITIZE_STRING: Removes tags and encodes special characters.
FILTER_SANITIZE_URL: Removes all illegal characters from a URL.
Examples
Sanitizing Input
php
Copier le code
$string = "<h1>Hello World!</h1>";
$sanitized_string = filter_var($string, FILTER_SANITIZE_STRING);
echo $sanitized_string; // Outputs: Hello World!
Validating Input
php
Copier le code
$url = "http://www.example.com";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "This is a valid URL.";
} else {
    echo "This is not a valid URL.";
}

*/