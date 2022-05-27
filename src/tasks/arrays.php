<?php

/**
 * Вывести информацию о массиве в удобочитаемом виде
 */
$a = [
    'Andi',
    'Benny',
    'Cara',
    'Danny',
    'Emily',
];
print_r($a);

/**
 * Вывести информацию о массиве в удобочитаемом виде
 */
$a = [
    'Andi',
    'Benny',
    'Cara',
    'Danny',
    'Emily',
];
var_export($a);

/**
 * Вывести информацию о массиве в удобочитаемом виде, включая тип и значение
 */
$a = [
    'Andi',
    'Benny',
    'Cara',
    'Danny',
    'Emily',
];
var_dump($a);

/**
 * Получить из массива значения
 */
$a = [
    'car_1' => 'Andi',
    'car_2' => 'Benny',
    'car_3' => 'Cara',
    'car_4' => 'Danny',
    'car_5' => 'Emily',
];
$values = array_values($a);
print_r($values);

/**
 * Получить из массива ключи
 */
$a = [
    'car_1' => 'Andi',
    'car_2' => 'Benny',
    'car_3' => 'Cara',
    'car_4' => 'Danny',
    'car_5' => 'Emily',
];
$keys = array_keys($a);
print_r($keys);
