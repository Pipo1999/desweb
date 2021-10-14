<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>301Cards</title>
</head>
<body>

<?php
$cardsColl ->shuffle();
foreach ($cardsColl -> getCards() as $carta){
    if(is_array($carta)){
        foreach ($carta as $valor){
            echo "<h1>".$valor -> getSymbol()."-".$valor -> getSuit()." -> ".$valor -> getValue()."</h1>";
        }
    }
}
?>

</body>
</html>