<?php


class searchOcorrence
{
    private $strfull;
    private $strin;

    function __construct($strFull,$strin) {

        setStrFull($strFull);
        setStrIn($strin);

    }

    public function setStrFull($str_arg)
    {
        $this->strfull = $str_arg;
    }

    public function setStrIn($str_arg)
    {
        $this->strin = $str_arg;        
    }

    public function getStrFull() {
        return $this->strfull;
    }

    public function getStrIn() {
        return $this->strin;
    }

    public function serachIn($term,$string) {

        $pos = strpos( $string, $term );
        if ($pos === false) {
            $pos = 0;        
        }
        return $pos;
    }
}

?>