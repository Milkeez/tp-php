<?php 
function distance(float $x1,float $x2,float $y1,float $y2):float
{
    return sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
}


?>