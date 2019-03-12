<?php 

class square {
    private $width;
    private $heght;
    
    function __construct($x,$y)
    {
        $this->width = $x;
        $this->heght = $y;
        if (validMatrix($this->width.$this->heght) == true) {
            $this->printMatrix($this->makeMatrix());
        } else echo "Impossible this not Square matrix";
    }

    function validMatrix($x,$y) {
        if ($x == $y) {
            return true;
        } else return false;
    }

    function makeMatrix() {
        $matrix = array();
        for ($i = 0; $i <= $this->heght; $i++) {
            for ($j = 0; $j <= $this->width; $j++) {
                if ($i = $j || $i = 1 || $j = 1 || $i = $this->heght || $j = $this->width) {
                    $matrix[$i][$j] = 1;
                } else $matrix[$i][$j] = rand(0,1);
            }
        }
        return $matrix;
    }

    function printMatrix($arr) {
        for ($i = 0; $i <= $this->heght; $i++) {
            echo "<br>";
            for ($j = 0; $j <= $this->width; $j++) {
                if ($arr[$i][$j] == 0) {
                    echo "white";
                } else echo "black";
            }
        }
    }
}
?>