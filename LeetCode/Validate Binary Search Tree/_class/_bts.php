<?php
class bts
{
    private $node;
    private $left;
    private $right;
    private $valid;

    function __construct($node, $left, $right)
    {
        if ($left >= $node || $right <= $node ) {
            $this->valid = false;
            $this->node = $this->left = $this->right = null;
        } else {
            $this->valid = true;
            $this->node = $node;
            $this->left = $left;
            $this->right = $right;    
        }
        return $this->valid; 
    }
    function getValid() {
        return $this->valid;
    }
    function getNode() {
        return $this->node;
    }
    function getLeft() {
        return $this->left;
    }
    function getRight() {
        return $this->right;
    }
}



?>