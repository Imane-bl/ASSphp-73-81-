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




Filtering Input Arrays
You can also filter entire arrays using the filter_input_array function.

php
Copier le code
$args = [
    'name' => FILTER_SANITIZE_STRING,
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => ['min_range' => 1, 'max_range' => 120]
    ],
    'email' => FILTER_VALIDATE_EMAIL
];

$inputs = filter_input_array(INPUT_POST, $args);

if ($inputs['email'] && $inputs['age'] !== false && $inputs['name']) {
    echo "All inputs are valid.";
} else {
    echo "Some inputs are invalid.";
}
Custom Filters
You can also create custom callback functions to use as filters.

php
Copier le code
function custom_filter($value) {
    // Custom filter logic
    return strtoupper($value);
}

$string = "hello world";
$filtered_string = filter_var($string, FILTER_CALLBACK, ['options' => 'custom_filter']);
echo $filtered_string; // Outputs: HELLO WORLD

//--------------------------------------------

abs: Returns the absolute value of a number.
php
Copier le code
$value = abs(-10); // $value is 10


round: Rounds a floating-point number to the nearest integer.

php
Copier le code
$rounded = round(3.5); // $rounded is 4


ceil: Rounds fractions up.

php
Copier le code
$ceil = ceil(4.2); // $ceil is 5

floor: Rounds fractions down.

php
Copier le code
$floor = floor(4.8); // $floor is 4


max: Finds the highest value in a list of numbers.

php
Copier le code
$maxValue = max(1, 3, 5, 7); // $maxValue is 7
min: Finds the lowest value in a list of numbers.

php
Copier le code
$minValue = min(1, 3, 5, 7); // $minValue is 1
Power and Roots
pow: Raises a number to the power of another.

php
Copier le code
$power = pow(2, 3); // $power is 8
sqrt: Calculates the square root of a number.

php
Copier le code
$sqrt = sqrt(16); // $sqrt is 4
Random Numbers
rand: Generates a random integer.

php
Copier le code
$random = rand(1, 10); // $random is a random number between 1 and 10

mt_rand: Generates a better random integer using the Mersenne Twister algorithm.

php
Copier le code
$random = mt_rand(1, 10); // $random is a random number between 1 and 10
random_int: Generates a cryptographically secure random integer (PHP 7 and later).

php
Copier le code
$random = random_int(1, 10); // $random is a cryptographically secure 

sin: Sine of an angle.

php
Copier le code
$sine = sin(deg2rad(30)); // $sine is 0.5
cos: Cosine of an angle.

php
Copier le code
$cosine = cos(deg2rad(60)); // $cosine is 0.5
tan: Tangent of an angle.

php
Copier le code
$tangent = tan(deg2rad(45)); // $tangent is 1
asin: Arc sine of a value.

php
Copier le code
$arcSine = rad2deg(asin(0.5)); // $arcSine is 30
acos: Arc cosine of a value.

php
Copier le code
$arcCosine = rad2deg(acos(0.5)); // $arcCosine is 60
atan: Arc tangent of a value.

php
Copier le code
$arcTangent = rad2deg(atan(1)); // $arcTangent is 45

log: Natural logarithm (base e) of a number.

php
Copier le code
$log = log(10); // $log is approximately 2.302585
log10: Base-10 logarithm of a number.

php
Copier le code
$log10 = log10(100); // $log10 is 2
exp: Calculates the exponent of e.

php
Copier le code
$exp = exp(2); // $exp is approximately 7.389056
Hyperbolic Functions
sinh: Hyperbolic sine of a number.

php
Copier le code
$sinh = sinh(1); // $sinh is approximately 1.175201
cosh: Hyperbolic cosine of a number.

php
Copier le code
$cosh = cosh(1); // $cosh is approximately 1.543081
tanh: Hyperbolic tangent of a number.

php
Copier le code
$tanh = tanh(1); // $tanh is approximately 0.761594

------------------------------------------------------------

$number1 = 3.456;

// Round
$rounded = round($number1, 2); // Arrondir à 2 chiffres après la virgule
echo "Rounded: $rounded\n"; // Outputs: 3.46

// Ceil
$ceiled = ceil($number1);
echo "Ceiled: $ceiled\n"; // Outputs: 4

// Floor
$floored = floor($number1);
echo "Floored: $floored\n"; // Outputs: 3



. PHP Filter_Var
La fonction filter_var est utilisée pour filtrer une variable avec un filtre spécifié.

Exemple
php
Copier le code
$email = "test@example.com";

// Validation d'une adresse email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valide\n";
} else {
    echo "Email invalide\n";
}

// Assainissement d'une chaîne
$string = "<h1>Hello World!</h1>";
$sanitized_string = filter_var($string, FILTER_SANITIZE_STRING);
echo "Sanitized string: $sanitized_string\n"; // Outputs: Hello World!
3. PHP Filter_Input
La fonction filter_input est utilisée pour obtenir une entrée d'une source externe et la filtrer. Les sources d'entrée peuvent être INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, ou INPUT_ENV.

Exemple
Supposons que vous avez un formulaire HTML avec une méthode POST :

html
Copier le code
<form method="POST" action="">
    <input type="text" name="email">
    <input type="submit" value="Submit">
</form>
Vous pouvez filtrer l'entrée de cette manière :

php
Copier le code
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($email) {
    echo "Email valide: $email\n";
*/