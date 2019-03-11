<?php
require_once "./_class/_sum_not_opr.php";
require_once "./_class/_shuffle.php";
require_once "./_class/_randonMatrix.php";
require_once "./_class/_zeroToN.php";

//1 sum not operator arithimetic
    
    $value1 = 1;
    $value2 = 3;

    // a soma de dois termos pode ser realizada usando o operador de atribuição
    $sumvalues = new sumNot($value1,$value2);

//2 deck of shuffle cards equal randle

    //o deck é gerado e enbaralhaod de forma justa
    $cards = new deckCard();
    print_r($cards->shuffleDeck());

//3 shuffle array n size for a a array m size

    $array1 = array(2,1,4,5,7,4,9);
    $s_matrix = new randMatrix($array1,4);
    print_r($s_matrix->getNewMatrix());

//4 integer valyue numbers btween 0 or n

    $num = 255;
    $btween = new zeroToN($num);
    print_r($btween->fetchNum());

// 5 Search string

    $stringfull = "Oi amigos tudo brm com vocês ?";
    $stringin = "ammigos";
    $search = new searchOcorrence($stringfull,$stringin);

// 6 one million and one billion

    require_once "./_class/onemillion.php";
    