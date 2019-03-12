<?php
class deckCard {
    
    public $type;
    public $numbers;
    public $deck = array();
    
    function __construct()
    {
        $this->setType();
        $this->setNumber();

        $index = 0;
        for ($z = 0; $z < 4; $z++) {
            for ($i=0; $i < count($this->type); $i++) { 
                for ($j=0; $j < count($this->numbers); $j++) { 
                    if ($j == 0) {
                    $this->deck[$index] = "Jokey";
                } else if ($j == 11) {
                    $this->deck[$index] = "Queen of ".$this->type[$i];
                } else if ($j == 12) {
                    $this->deck[$index] = "Jack of ".$this->type[$i];
                } else if ($j == 13) {
                    $this->deck[$index] = "King of ".$this->type[$i];
                } else if ($j == 1) {
                    $this->deck[$index] = "Ace of ".$this->type[$i];
                } else {
                    $this->deck[$index] = implode(" ",$this->numbers)." of ".$this->type[$i];
                }    
                $index++;
                }
            }
        }
    }
    
    private function setType() {
        $this->type = array("ACE","JACK","HERATHS","DIAMONDS","JOKEY");
    }

    private function setNumber()
    {
        $this->numbers = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13);
    }

    public function getType() {
        return $this->type;
    }

    public function getNumbers() {
        return $this->numbers;
    }

    public function getDeck() {
        return $this->deck;
    }

    public function shuffleDeck() {
        return shuffle($this->deck);
    }
}