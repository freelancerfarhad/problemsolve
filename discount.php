<?php
// $amount = 1000;
// $discount =20; // 1000tk=10% , 1500tk=12% , 2000tk=15% , 3000tk=20% // ai condiction ki babe hobe help post = (if-else-condiction)
// $discountAmount = ($amount * $discount) / 100;
// $vatTotalAmkount = $amount+$discountAmount;
// $discountTotalAmkount = $amount-$discountAmount;
// if($amount >= 1000 && $amount <= 1499)
// {
//     if($discount >= 10 && $discount <= 11){
//           printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
//     }else{
//         echo "discount 1000-1499";
//     }
// }
// else if($amount >= 1500 && $amount <= 1999)
// {
//      if($discount >= 12 && $discount <= 14){
//         printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
//     }else{
//         echo "discount 1500-1999";
//     }
// }
// else if($amount >= 2000 && $amount <= 2999)
// {
//       if($discount >= 15 && $discount <= 19){
//         printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
//     }else{
//         echo "discount 2000-2999";
//     }
// }
// else if($amount >= 3000)
// {
//     if($discount >= 20){
//         printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
//     }else{
//         echo "discount 3000";
//     }
// }
// else{
//     echo "Invalid Data";
// }

// if($amount >= 1000 && $amount <= 1499 && $discount)
// {
//     printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
// }
// else if($amount >= 1500 && $amount <= 1999 && $discount+2)
// {
//     printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
// }
// else if($amount >= 2000 && $amount <= 2999 || $discount+5)
// {
//     printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
// }
// else if($amount >= 3000 || $discount >=20)
// {
//     printf('Totla Amount %stk Discount(%s%4$s) Discount Amount %stk',$amount,$discount,$discountTotalAmkount,"%");
// }
// else{
//     echo "Invalid Data";
// }
$tuition =20000;// 20000$
$tuitionFee = 10; // 25 %
$tuitionFeeAmount = 0;
if($tuition > 20000 ){
  $dis = ($tuition * $tuitionFee) / 100;
  $tuitionFeeAmount = $tuition - $dis;
  printf('Totla Tuition Fee Amount %s$ Discount(%s%4$s) Tuition Fee Amount %s$',$tuition,$tuitionFee,$tuitionFeeAmount,"%");
}elseif($tuition > 10000 && $tuition < 20000){
    printf('Totla Tuition Fee Amount %s$ Discount(%s%4$s) Tuition Fee Amount %s$',$tuition,$tuitionFee,$tuitionFeeAmount,"%");
}else{
    echo "dd";
}