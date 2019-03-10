<?php

$ipv4 ="192.188.2.2";
echo "<pre>";
function validarIP($ip,$ver)
{
    
    if($ver == "4.0")
    {
        $arrIP = explode('.', $ip);
        if(count($arrIP) == 4)
        {
            foreach ($arrIP as $i)
            {
                //$i = $oct;
                if($i > 0 and $i <= 255 and mb_strlen($i) < 4)
                {
                    if(substr($i,0,1) == 0)
                    {
                        return "IP v4 INVALIDO";
                    }
                    
                }
                else {
                    return "IP v4 INVALIDO";
                }
            //VERIFICAR VALIDAÇÃO DOS OCTETOS
            }
            return  "IP v4 VALIDO !!";
            
        }else
        {
            echo 'IP V4 Invalido';
        }
    }
    
    if($ver == "6.0")
    {
        $arrIP = explode(':', $ip);
        if(count($arrIP) == 8)
        {
            foreach ($arrIP as $hex)
            {
               // verifica se o campo tem no maximo 4 posições 
                if(mb_strlen($hex) <= 4 and mb_strlen($hex) >0)
                {
                    //verifica se é um hexadecimal
                    if(!ctype_xdigit($hex) )
                    {
                        return "IP V6 INVALIDO ".$hex;
                    }                  
                }
                elseif(mb_strlen($hex) >4){                    
                    return "IP V6 INVALIDO TAMANHO =" .mb_strlen($hex);                    
                }
               
            }
            return "IP V6 VALIDO ";
        }
        else 
        {
            return  "Ip V6 Invalido !";
        }
        
    }
}

//ECHO validarIP($ipv4, '4.0');
echo "<br>";
ECHO validarIP("2001:0dÇb8:85a3:0000:0000:8a2e:0370:733", '6.0');
