<?php
function detectCapital($str)
{
    $nM = 0;
    $nMin= 0;
    $r = "false";
    for($i =0; strlen($str) >$i; $i++)
    {
        if(ctype_lower($str[0]) )
        {
            
           //PRIMEIRA LETRA MAIUSCULA 
            if(ctype_upper($str[$i]) == true)
            {
                var_dump($str[$i]);
                exit;
                return "PALAVRA INVALIDA";
 
            }
           $nM++; 
           $r = "VALIDA";
            
        }
        else {
              printf($i);
        echo "ASDA<br>"; 
        }
        
        return $r;
    }
}
$string= "aaaFs";
ECHO  detectCapital($string);
