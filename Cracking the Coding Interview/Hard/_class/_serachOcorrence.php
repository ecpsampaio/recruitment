<?php


class searchOcorrence
{
    private $strfull;
    private $strin;

    function __construct($strFull,$strin) {

        $this->setFull($strFull);
        $this->setStrIn($strin);

    }

    public function setFull($str_arg)
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

    public function serachIn() {

        $pos = strpos( $this->getStrFull(), $this->getStrIn() );
        if ($pos === false) {
            $pos = 0;        
        }
        return $pos;
    }
}

?>