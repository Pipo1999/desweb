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

    <div>

        <?php foreach ($cardCollection->getCards() as $card) :?>            
            <p><?=$card->getSuit() ?>  <?=$card->getSymbol()?></p>        
        <?php endforeach;?>
        ?></div>


</body>

</html>