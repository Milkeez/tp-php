<?php 
    function seconddegre($a,$b, $c)
    {
        $delta=($b*$b)-(4*$a*$c);
        if($delta<0) 
            print("Votre équation n'a pas de solution dans R");
        else if($delta==0)
        {
            $x=-$b/2*$a;
            print("Votre équation a pour solution:".$x);
        }
        else if($delta>0)
        {
            $x=(-$b-(sqrt($q)))/(2*$a); 
            $x1=(-$b+(sqrt($q)))/(2*$a);
            print("Votre équation admet deux solutions:".$x.$x1);
        }
    }
?>