
<?php
function _valid($value) {
    if ($value == true) {
        echo "Válido";
    } else echo "Invalido";
}

function getArray($arr)
{
    for ($i=0; $i < sizeof($arr); $i++) { 
        if ($i == sizeof($arr)-1) {
            echo $arr[$i];
        } else echo $arr[$i]." ,";
    }
}

?>