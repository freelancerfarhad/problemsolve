<?php

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
