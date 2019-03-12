<?php

class longestWord 
{
    public $arrayWord = array();
    private $mostString;
    
    
    public function __construct($arr) 
    {
        $this->arrayWord = $arr;   
    }


    public function Most()
    {
        $result = $temp_before = $temp_after = 0;
        for ($i=0; $i < count($this->arrayWord); $i++) {
            $temp_after = $temp_before; 
            $temp_before = $this->arrayWord[$i];
            if (sizeof($temp_before) > sizeof($temp_after)) {
                $this->mostString = $temp_before;
            } else $this->nostString = $temp_after; 
        }
    }

    public function getMost()
    {
        return $this->mostString;
    }
    
}