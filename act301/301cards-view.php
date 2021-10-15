<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>301Cards</title>
</head>
<body>

<?php
require "301cards.php";

foreach ($cards as $carta){
    echo "<p>".$carta -> getSuit()." -> ".$carta -> getSymbol()." - ".$carta -> getValue()."</p>";
}

?>

</body>
</html>