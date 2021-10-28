<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors

require "helpers.php";

require "ValidationException.php";
require "RequiredValidationException.php";
require "TooLongValidationException.php";
require "TooShortValidationException.php";
require "InvalidPhoneValidationException.php";
require "InvalidEmailValidationException.php";

require "FileUploadException.php";
require "NoUploadedFileException.php";
require "InvalidTypeFileException.php";
require "TooBigFileException.php";

$firstname = "";
$lastname = "";
$phone = "";
$photo = "";
$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;



if (isPost()) {

    $isPost = true;

    try {
        if (validate_string($_POST["firstname"], 1, 25 ))
            $firstname = clear($_POST["firstname"]);
    } catch (RequiredValidationException $e){
        $errors[] = "Nom vuit";
    } catch (TooLongValidationException $e){
        $errors[] = "Nom massa llarg";
    } catch (TooShortValidationException $e){
        $errors[] = "Nom curt";
    }

    try {
        if (validate_string($_POST["lastname"], 3, 50))
            $lastname = clear($_POST["lastname"]);
    } catch (RequiredValidationException $e){
        $errors[] = "Cognom vuit";
    } catch (TooLongValidationException $e){
        $errors[] = "Cognom massa llarg";
    } catch (TooShortValidationException $e){
        $errors[] = "Cognom curt";
    }

    try {
        if (validate_phone($_POST["phone"]))
            $phone = clear($_POST["phone"]);
    } catch (RequiredValidationException $e) {
        $errors[] = "Telefon vuit";
    } catch (InvalidPhoneValidationException $e) {
        $errors[] = "Telefon invalid";
    }

    try {
        if (validate_email($_POST["email"]))
            $email = clear($_POST["email"]);
    } catch (InvalidEmailValidationException $e) {
        $errors[] = "Correu electrònic no indicat o erroni";
    } catch (RequiredValidationException $e) {
        $errors[] = "Correu electrònic vuit";
    }

    try {
        if (validate_photo($_POST["photo"])) {
            $photo = clear($_POST["photo"]);
        }
    } catch (NoUploadedFileException $e) {
        $errors[] = "Imatge vuida";
    } catch (TooBigFileException $e) {
        $errors[] = "Imatge massa gran";
    } catch (InvalidTypeFileException$e) {
        $errors[] = "Imatge de tipus erroni";
    }


}

require "272Formulari.view.php";
