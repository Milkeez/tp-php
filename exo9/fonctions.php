<?php 
    function controle($nbr, string $key, array &$arrError):void
    {
        if(empty($nbr))
        {
            $arrError[$key]="Veillez saisir un nombre";
        }
        else
        {
            if(!is_numeric($nbr))
            {
                $arrError="Vous devez entrer un nombre";
            }
            else
            {
                if ($nbr<0)
                $arrError="Veillez saisir un nombre positif";
            }
        }
    }
    function tabmulti($n):void
    {
        for($i=1; $i<=10; $i++)
        {
            $res= $i*$n;
            echo " $n  *  $i  =  $res <br>";
        }

    }
?>
