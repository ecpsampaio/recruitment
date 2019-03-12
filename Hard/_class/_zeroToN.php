<?php

    class zeroToN 
    {
        public $zero = 0;
        public $n;

        function __contructor($n) {
            
            $this->n = $n;
        }

        function fetchNum() {
            $num = 0;
            for ($i = $this->zero; $i < $this->n; $i++) {
                $num++;
            }
            return $num;
        }
    }