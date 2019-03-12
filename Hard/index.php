<?php
require_once "./_class/_sum_not_opr.php";
require_once "./_class/_shuffle.php";
require_once "./_class/_randonMatrix.php";
require_once "./_class/_zeroToN.php";
require_once "./_class/_serachOcorrence.php";
require_once "./_class/_longestWorld.php";
require_once "./_class/_searchString.php";
require_once "./_class/_randonNumber.php";
require_once "./_class/_square.php";

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
    implode($s_matrix->getNewMatrix());

//4 integer valyue numbers btween 0 or n

    $num = 255;
    $btween = new zeroToN($num);
    print_r($btween->fetchNum());

// 5 Search string

    $stringfull = "Oi amigos tudo brm com vocês ?";
    $stringin = "com";
    $search = new searchOcorrence($stringfull,$stringin);
    echo $search->serachIn();

// 6 one million and one billion

    require_once "./_class/onemillion.php";

// 7 longest world

    $strarr = array("test", "tester", "testertest", "testing", "testingtester");
    $strMost = new longestWord($strarr);
    $strMost->getMost();
    
// 8 search string t in string s

    $strarr1 = array("rato"," roeu a roupa", "do rei","de roma");
    $strmega = "O rato roeu a roupa do rei de roma";
    $strserach1 = new searchString($strarr1,$strmega);

// 9 sum and media rand arrays:
    $sumarr = new randonNunber(10);

// 10 square matrix
    new square(3,3);
    