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
    function champs($n):void
    {
        for($i=1; $i<=$n; $i++)
        {
            echo "<input type=text name=$i><br>";
        }

    }

