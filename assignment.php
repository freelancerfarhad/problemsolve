<?php
/*HF consultancy wants to build a very simple commission-calculating calculator for their admission agents.  Usually,

// QUSTION: the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars.
 But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent.
  If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars, the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid ?
  */

$tuitionFee = 20000;

$totalCommission = ($tuitionFee >= 20000) ? (0.25*$tuitionFee."$ = 25%") : (($tuitionFee >= 10000) ? (0.20*$tuitionFee."$ = 20%") : (($tuitionFee >= 7000) ? (0.15*$tuitionFee." = 15% ") : "Invalid data"));
echo "Tuition Fee {$tuitionFee}$ and commission $totalCommission";




