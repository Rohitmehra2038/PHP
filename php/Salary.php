<?php
$basic = 10000;

if($basic >= 10000)
{
$ta=(2.5*$basic)/100;
$da=(3.5*$basic)/100;
$hr=(4.5*$basic)/100;
$net_salary = $basic + $ta + $da + $hr ; 
echo " Net salary is".$net_salary ;
}
else
{
echo "Net salary is".$basic ;
}
?>
  