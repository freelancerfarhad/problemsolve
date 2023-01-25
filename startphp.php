<?php
$num = 0;
$age = 13;
// Using if statement
if ($num > 0) {
 $result = 'positive';
}

if ($num < 0 ){
$result = 'Negative';
if( $num < -5) {
 $result = 'Value Is Below -5';
}
}

else {
 $result = "It's Zero";
}


   
// echo $num > 0 ? " Positive" : ($num < 0 ? " Negative" : "It's Zero ");
// echo $age >= 13 ? " You are adolecen" : ($age < 13 ? ($age < -5 ? "Value Is Below -5" : " You are smallest") : "Age not anough");
echo $num > 0 ? " Positive" : ($num < 0 ? ($num < -5 ? "Value Is Below -5" : " Negative") : "It's Zero ");
// echo $num > 0 ? " Positive" : (($num < 0 ? ($num < -5 ? "Value Is Below -5" : " Negative") : "It's Zero "));


