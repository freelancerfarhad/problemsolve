<?php
$year = 2012;
if($year % 4 == 0 && ($year % 100 !=0 || $year % 400==0)){
    echo "$year is a  leap Year";
}else{
    echo "$year is a not leap Year";
}
// function add_five(&$value) {
//     $value += 5;// $value = $value = 5
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;

// function sum(int $x, int $y) {
//     $z = $x + $y;
//     return $z;
//   }
//   echo sum(5,5);


// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//     echo "$year is a leap Year";
// }elseif($year % 4 == 0 && $year % 100 == 0){
//     echo "$year is a not leap Year";
// }elseif($year % 4 == 0 ){
//     echo "$year is a  leap Year";
// }else{
//     echo "$year is a not leap Year";
// } 
// echo PHP_EOL;


// $result = ($year % 4 == 0) ? (($year % 100 != 0 || $year % 400 == 0) ? ("$year is a  leap Year") : ("$year is a not leap Year")) : ("$year is a not leap Year");
// echo $result;