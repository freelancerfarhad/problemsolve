<?php
// student examination result
// $result = 33;
// if($result <= 32)
// {
//     echo "Fail";
// }
// else if($result >= 33 && $result <= 50)
// {
//     echo "D Grade";
// }
// else if($result >= 51 && $result <= 65)
// {
//     echo "C Grade";
// }
// else if($result >= 66 && $result <= 79)
// {
//     echo "B Grade";
// }
// else if($result >= 80 && $result <= 90)
// {
//     echo "A Grade";
// }
// else if($result >= 91 && $result <= 100)
// {
//     echo "A+ Grade";
// }else{
//     echo "Data Invalid !";
// }

// person age define
// $age = 0;
// if($age <= 12)
// {
//     echo " you are Child !";
// }
// else if($age >= 13 && $age <= 18){
//     echo "you are Adelosen !";
// }else if($age >= 19 && $age <= 35)
// {
//     echo "your are Adult !";
// }else if($age >= 36 && $age <= 50)
// {
//     echo "you are young man !";
// }
// else if($age >= 51 && $age <= 100)
// {
//     echo "you are old man !";
// }else{
//     echo "data not valid !";
// }

// $regularPrice = 720;
// $persent = 10;

// $divesionOfPersent = ($regularPrice*$persent) / 100;
// $amountvat=$regularPrice+$divesionOfPersent;
// $amountdis=$regularPrice-$divesionOfPersent;
// printf('regular price %s amount+vat %s amount discount %4$s price %s',$regularPrice,$amountvat,$amountdis,$persent);




// $age = 40;
// $result = ($age >= 30) ? (($age > 50) ? ("a large man") : ("second condiction smallest")) : ("first condicion no");
// echo $result;

echo PHP_EOL;
$amount = 1000;
$discount =10; // 1000=10% , 1500=12% , 2000=15% , 3000=20% // ai condiction ki babe hobe help post = (if-else-condiction)
$discountAmount = ($amount * $discount) / 100;
$vatTotalAmkount = $amount+$discountAmount;
$discountTotalAmkount = $amount-$discountAmount;

if($amount >= 1000 && $amount <= 1499 && $discount >=10 && $discount<=11)
{
    printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
}
else if($amount >= 1500 && $amount <= 1999 || $discount >=12 && $discount<=14)
{
    printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
}
else if($amount >= 2000 && $amount <= 2999 || $discount >=15 && $discount<=19)
{
    printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
}
else if($amount >= 3000 || $discount >=20)
{
    printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
}
else{
    echo "Invalid Data";
}
