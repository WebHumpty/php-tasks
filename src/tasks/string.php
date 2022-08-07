<?php

/**
 * Замените в строке все вхождения 'word' на 'letter'.
 */
$string = 'Hello world, hello world, world hello';
$string = str_replace('world', 'letter', $string);
echo $string;

/**
 * Дана строка. Если ее длина больше 10,
 * то оставить в строке только первые 6 символов,
 * иначе дополнить строку символами 'o' до длины 12
 */
$string = 'Привет';
$string = trim($string);
$count = mb_strlen($string);
$limit = 10;
$number = 12;
$string = ($count > $limit)
    ? mb_substr($string, 0, 6)
    : $string .= str_repeat('o', ($number - $count));
echo $string;

/**
 * Дана строка.
 * Если она начинается на 'abc',
 * то заменить их на 'www',
 * иначе добавить в конец строки 'zzz'
 */
$string = 'abci';
$isString = (preg_match('#^abc#', $string) === 1);
$string = ($isString)
    ? str_replace(substr($string, 0, 3), 'www', $string)
    : $string . 'zzz';
echo $string;

/**
 * Дана строка string = a1b2c3d4i5fg67, найти количество цифр.
 */
$string = 'a1b2c3d4i5fg67';
$numbers = array_filter(mb_str_split($string), function ($v) {
    return is_numeric($v);
}, ARRAY_FILTER_USE_BOTH);
$count = count($numbers);
echo $count;
