<?php

function password_generate($number)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz@!?;:*$&#';
    return substr(str_shuffle($data), 0, $number);
}
