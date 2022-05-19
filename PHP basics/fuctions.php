<?php
    function sum($a , $b)
    {
        $sum = $a + $b;
        echo   'Sum of two numbers is '. $sum  ;
    }
    // sum(2004231,200);

    echo  `<br>`  ;

    function PercentageCalc($num1,$num2,$num3,$num4,$num5)
    {
        $per =  $num1+$num2+$num3+$num4+$num5;
        $div = $per / 5;
        echo "Your Result is $div"  ;
    };
    echo  `<br>`  ;
    PercentageCalc(100,2,54,43,32);
    
?>