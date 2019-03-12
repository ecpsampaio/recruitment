<?php

class randonNumbers 
{
    private $arrnumbers;
    private $media;
    private $limit;
    
    function __construct($maxrange)
    {
        $this->limit = $maxrange;
        makeRandon($this->limit);
    }

    function makeRandon($limit) {
        $arr = array();
        for ($i = 0; $i <= $limit; $i++) {
            $arr[$i] = rand();
        }
        $this->arrnumbers = $arr;
    }

    function setMedia($arr) {
        $this->media = array_sum($arr)/count($arr);
    }

    function getMedia() {
        return $this->media;
    }

    function getArr() {
        return $this->arrnumbers;
    }
}

?>