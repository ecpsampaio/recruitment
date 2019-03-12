<?php

class sumNot 
{
    private $x;
    private $y;
    private $result = 0;
    
    public function __construct($x, $y) {
        $this->setX($x);
        $this->setY($y);
        $this->setSum();
    }

    private function setX($x) {
        $this->x = $x;
    }

    
    private function setY($y) {
        $this->y = $y;
    }

    private function setSum() {
        $this->result += $this->x;
        $this->result += $this->y; 
    }

    public function getSum() {        
        return $this->result;
    }
}
