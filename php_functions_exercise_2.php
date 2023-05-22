<?php

function checkIfVowelOrConsonant($char)
{
    $char = strtoupper($char);
    $result = "$char is consonant";

    if ($char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
        $result = "$char is vowel";
    }

    return $result;
}

function convertDigitToWord($value)
{
    $numberWord = [
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
    ];

    $valueArr = str_split($value);

    $result = '';
    foreach ($valueArr as $number) {
        $result .= $numberWord[$number] . ' ';
    }

    return $result;
}

function isDivisibleByThree($value)
{
    return $value % 3 == 0 ? $value . ' is divisible by 3' : $value . ' is not divisible by 3';
}

function deleteDuplicate($list)
{
    $newlist = [];
    $prevValue = null;
    foreach ($list as $value) {
        if ($prevValue != $value) {
            array_push($newlist, $value);
            $prevValue = $value;
        }
    }
    return $newlist;
}

function isArmstrongNumber($number)
{
    $digits = str_split($number);
    $sum = 0;
    foreach ($digits as $value) {
        $sum += $value ** 3;
    }

    if ($sum == $number) {
        return $number . ' is an Armstrong Number';
    } else {
        return $number . ' is not an Armstrong Number';
    }
}
