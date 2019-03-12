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
require_once "./_class/submatrix.php";
require_once "./_fun/_print.php";


//1 sum not operator arithimetic
    echoPrint($arrQuest[0]);
    $value1 = 1;
    $value2 = 3;

    $sumvalues = new sumNot($value1,$value2);

//2 deck of shuffle cards equal randle

    echoPrint($arrQuest[1]);
    $cards = new deckCard();
    print_r($cards->shuffleDeck());

//3 shuffle array n size for a a array m size

    echoPrint($arrQuest[2]);
    $array1 = array(2,1,4,5,7,4,9);
    $s_matrix = new randMatrix($array1,4);
    implode($s_matrix->getNewMatrix());

//4 integer valyue numbers btween 0 or n

    echoPrint($arrQuest[3]);
    $num = 255;
    $btween = new zeroToN($num);
    print_r($btween->fetchNum());

// 5 Search string

    echoPrint($arrQuest[4]);
    $stringfull = "Oi amigos tudo brm com vocês ?";
    $stringin = "com";
    $search = new searchOcorrence($stringfull,$stringin);
    echo $search->serachIn();

// 6 one million and one billion

    echoPrint($arrQuest[5]);
    require_once "./_class/onemillion.php";

// 7 longest world

    echoPrint($arrQuest[6]);
    $strarr = array("test", "tester", "testertest", "testing", "testingtester");
    $strMost = new longestWord($strarr);
    $strMost->getMost();
    
// 8 search string t in string s

    echoPrint($arrQuest[7]);
    $strarr1 = array("rato"," roeu a roupa", "do rei","de roma");
    $strmega = "O rato roeu a roupa do rei de roma";
    $strserach1 = new searchString($strarr1,$strmega);

// 9 sum and media rand arrays:

    echoPrint($arrQuest[8]);
    $sumarr = new randonNunber(10);

// 10 square matrix

    echoPrint($arrQuest[9]);
    new square(3,3);

// 11 submatrix
    echoPrint($arrQuest[10]);
    $M = array(array(0, 1, -1, 0, -1),  
            array(-1, -1, 0, -1, 0),  
            array(0, -1, -1, 1, 0),  
            array(-1, -1, 1, 1, 0),  
            array(1, 1, 1, -1, 1),  
            array(0, 0, 0, 0, 0));  
        
    $R = 6 ; 
    $C = 5 ;          
    maxSubSquare($M, $R, $C);  
