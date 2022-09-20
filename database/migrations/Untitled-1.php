<?php


//407 = (4*4*4) + (0*0*0) + (7*7*7)

$num=407;

$total=0;

$y=$num;

while($y!=0){
    $rem = ( $y%10 );
    $total= ( $total+$rem*$rem*$rem );
    $y = $y/10;
}

if($num==$total){
    print('Armstrong number');
}else{
    print('Not an Armstrong number');
}
