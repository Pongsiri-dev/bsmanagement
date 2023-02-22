<?php
// namespace App\Helpers;

function phoneNumberFormat($number)
{
    // Allow only Digits, remove all other characters.
    $number = preg_replace("/[^\d]/", "", $number);

    // get number length.
    $length = strlen($number);

    if ($length == 10) {
        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-xxx-$3", $number);
    } elseif ($length == 9) {
        $number = "0{$number}";
        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-xxx-$3", $number);
    } //if

    return $number;
}