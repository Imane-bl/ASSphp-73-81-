<?php

$var=rand(10,20);
while ($var == 10 || $var == 20) {
$var=rand(10,20);
}
print_r($var);


// Example
// 13
// 14
// 19
// 12
?>