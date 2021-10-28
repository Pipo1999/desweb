<?php
function clear(string $value): string {
    $value = trim($value);
    return htmlspecialchars($value);
}

function isPost(): bool {
    return $_SERVER["REQUEST_METHOD"]==="POST";
}

function is_empty($value):bool {
    return empty($value);
}

// compare if the current value in the selected array
function is_selected(string $value, array $array): bool {
    if (in_array($value, $array))
        return true;
    return false;
}

function show_post() {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

/**
 * @throws TooShortValidationException
 * @throws TooLongValidationException
 * @throws RequiredValidationException
 */
function validate_string(string $string, int $minLength = 1, int $maxLength = 50000): bool
{
    if (empty($string))
        throw new RequiredValidationException("string is required");
    if (strlen($string) > $maxLength)
        throw new TooLongValidationException("string is to long");
    if (strlen($string) < $minLength)
        throw new TooShortValidationException("string is to short");

    return true;
}

/**
 * @throws RequiredValidationException
 * @throws InvalidPhoneValidationException
 */
function validate_phone(string $phone): bool
{
    if (empty($phone))
        throw new RequiredValidationException("string is required");
    if (!preg_match("/^\d{9}$/", $phone))
        throw new InvalidPhoneValidationException("invalid phone");

    return true;
}

function validate_email(string $email): bool
{
    if (empty($email))
        throw new RequiredValidationException("string is required");
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        throw new InvalidEmailValidationException("invalid email");

    return true;
}


/**
 * @throws NoUploadedFileException
 * @throws TooBigFileException
 * @throws InvalidTypeFileException
 */
function validate_photo(string $photo): bool
{
    $photoFile = $_FILES["photo"]["name"];
    $extension = strtolower(substr($photoFile, strripos($photoFile, '.')+1));
    if (empty($photo))
        throw new NoUploadedFileException("photo is required");
    if ($_FILES["photo"]["size"] > 1048576)
        throw new TooBigFileException("photo is too big");
    if ($extension !== "jpg")
        throw new InvalidTypeFileException("photo is not jpg");

    return true;
}