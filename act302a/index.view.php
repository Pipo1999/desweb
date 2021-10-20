<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 302</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Vicent Jordà">

</head>

<body>

<h1>302 -Card</h1>

<?php foreach ($cards as $card) :?>
<p>
    <?= "{$card->getSymbol()} - {$card->getSuit()}" ?>
</p>   
<?php endforeach ?>

</body>

</html>