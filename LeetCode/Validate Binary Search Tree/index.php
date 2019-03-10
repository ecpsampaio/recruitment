<?php 
    require_once "./_class/_bts.php";
    require_once "./_class/_search_bts.php";
    require_once "./_fun.php";
        
    $arrteste0 = array(2,1,3);
    $arrteste1 = array(2,3,1);
    $sert[0] = new serachBts($arrteste0);
    $sert[1] = new serachBts($arrteste1);
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BTS- Search Valid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>BTS Search Validation:</h1>
    <h2>Exemplo 1: </h2>
    <p>Considerando o array (  <?php echo $sert[0]->printArr();?> ) terenos um bts</p>
    <p> <?php echo _valid($sert[0]->getValid()); ?> </p>
    <h2>Exemplo 2: </h2>
    <p>Considerando o array (  <?php echo $sert[1]->printArr();?> ) terenos um bts</p>
    <p> <?php echo _valid($sert[1]->getValid()); ?> </p>
</body>
</html>
<?php
