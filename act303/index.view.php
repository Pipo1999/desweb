<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 303</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Vicent Jordà">

</head>

<body>

<h1>303 -Card</h1>

<div>
    <?php
    $rand = rand(1, 2);
    if ($rand === 1) {
        $cardCollection -> writer();
    } else if($rand === 2) {
        $cardCollection -> imagenes();
    }
    ?>
</div>

</body>

</html>