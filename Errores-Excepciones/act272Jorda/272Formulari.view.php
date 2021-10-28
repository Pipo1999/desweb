<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad Errors i exepcions</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
    <style>
        body { font-family: "Bitstream Vera Serif"}
    </style>
</head>

<body>
<form action="" method="post">
        <pre>
        <?php
        if (!empty($errors))
            print_r($errors)
        ?>
        </pre>
    <div>
        <label for="firstname">Name</label>
        <input type="text" name="firstname" value="<?=$firstname?>">
    </div>
    <div>
        <label for="lastname">Cognoms</label>
        <input type="text" name="lastname" value="<?=$lastname?>">
    </div>
    <div>
        <label for="phone">Telèfon</label>
        <input type="text" name="phone" value="<?=$phone?>">
    </div>
    <div>
        <label for="email">Correu electrònic</label>
        <input type="text" name="email" value="<?=$email?>">
    </div>
    <div>
        <label for="photo">Foto</label>
        <input type="file" name="photo" value="<?=$photo?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<?php if (empty($errors) && $isPost): ?>
    <table>
        <tr>
            <th>Nom</th>
            <td><?= $firstname ?></td>
        </tr>
        <tr>
            <th>Cognom</th>
            <td><?= $lastname ?></td>
        </tr>
        <tr>
            <th>Telèfon</th>
            <td><?= $phone ?></td>
        </tr>
        <tr>
            <th>Correu</th>
            <td><?= $email ?></td>
        </tr>
    </table>
<?php endif ?>
</body>

</html>
