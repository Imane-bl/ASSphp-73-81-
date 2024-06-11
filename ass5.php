<?php

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";



echo filter_var($url1, FILTER_VALIDATE_URL) ? "Valid URL\n"."<br>" : "NOT a valid URL\n" ."<br>";
echo filter_var($url2, FILTER_VALIDATE_URL) ? "Valid URL\n" ."<br>": "NOT a valid URL\n"."<br>";
echo filter_var($url3, FILTER_VALIDATE_URL) ? "Valid URL\n"."<br>" : "NOT a valid URL\n"."<br>";
echo filter_var($url4, FILTER_VALIDATE_URL) ? "Valid URL\n"."<br>" : "NOT a valid URL\n"."<br>";
//print_r(filter_url)


/* Output
"Not A Valid URL"
"Not A Valid URL"
"A Valid URL"
"Not A Valid URL"*/

?>