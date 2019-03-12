<?php

class randMatrix
{
    public $matrix = array();
    public $shuffle_matrix = array();
    public $m; 

    public function __consruct($arr,$m)
    {
        $this->matrix = $arr;
        $this->m = $m;
        shuffleValues();
    }

    public function shuffleValues()
    {
        for ($i=0; $i < $this->m ; $i++) { 
            $this->shuffle_matrix[$i] = rand($this->matrix);
        }
    }

    public function getNewMatrix()
    {
        return $this->shuffle_matrix;
    }



}
