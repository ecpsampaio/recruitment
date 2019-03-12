<?php

class searchString 
{
    private $ArrString = array();
    private $StringS;
    private $StringSmall;

    function __construct($arrt, $stringS) 
    {
        $this->ArrString = $arrt;
        $this->StringS = $stringS;
        $this->search($this->ArrString,$this->StringS);
    }

    private function search($arr, $string) {
        for ($i = 0; $i <= count($arr); $i++) {
            if(strpos($string,$arr[$i]) == 0) {
                $result = false;
            } else {
                $this->StringSmall = $arr[$i];
                $result = true;
            }
        }
        return $result;
    }

    public function getSmall() {
        return $this->StringSmall;
    }
}
?>