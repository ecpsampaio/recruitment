<?php
class serachBts 
{
    private $arr;
    private $valid;
    private $crement = 0;  
    function __construct($arr)
    {
        $this->arr = $arr;

        for ($i=0; $i < round(sizeof($arr)/3); $i++) {
            $node = $arr[0+$this->crement];
            $left = $arr[1+$this->crement];
            $right = $arr[2+$this->crement];
            $this->crement += 3;
            $tsnum = array();
            $tsnum[$i] = new bts($node,$left,$right);
            if ($tsnum[$i]->getValid() == true) {
                $this->valid = true;
                continue;
            } else {
                $this->valid = false;
                break;
            } 
        }
    }

    function getValid() {
        return $this->valid;
    }

    function getArr() {
        return $this->arr;    
    }

    function printArr() {
        for ($i=0; $i < sizeof($this->getArr()); $i++) { 
            if ($i == sizeof($this->getArr())-1) {
                echo $this->getArr()[$i];
            } else echo $this->getArr()[$i]." ,";
        }
    }
}

?>