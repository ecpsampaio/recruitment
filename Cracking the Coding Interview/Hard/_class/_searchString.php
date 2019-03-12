<?php

class searchString 
{
    private $ArrString = array();
    private $ArrContent = array();
    private $StringS;
    private $StringSmall;

    function __construct($arrt, $stringS) 
    {
        $this->$ArrString = $arrt;
        $this->$StringS = $stringS;
        $this->search();
    }

    private function search() {
        for ($i = 0; $i < count($this->ArrString); $i++) {
            $index = 0;
            if (strpos($this->StringS, $this->ArrString[$i] =! false) {
                $this->ArrContent[$index] = $this->ArrString[$i];
                $index++;
            }
        }
    
        $after = $before = $result = 0;
        for ($j = 0; $j < count($ArrContent); $j++) {
            $before = $after;
            $after = $this->$ArrContent[$i];
            if (strlen($after) < strlen($before)) {
                $result = $after;
            } else {
                $result = $before;
            }
        }
        $this->StringSmall = $result;
    }
    public function getSmall() {
        return $this->StringSmall;
    }
}
?>