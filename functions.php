<?php

function password_generate($number)
{
    if ($number < 8 || $number > 32) {
        return ['class' => 'danger', 'message' => 'Error!!! password must be between 8 and 32 characters'];
    }
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz@!?;:*$&#';
    return ['class' => 'info', 'message' => substr(str_shuffle($data), 0, $number)];
}
