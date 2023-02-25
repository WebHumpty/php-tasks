<?php

/**
 * Регулярные выражения
 */

/**
 * Удаление изображений из HTML-страницы
 */
$content = file_get_contents(__DIR__ . '/file.php');
$pattern = '#<img[^>]+>#si';
$replace = '';
$content = preg_replace($pattern, $replace, $content);
echo $content;

/**
 * Преобразование нескольких пробельных символов в один
 */
//html документ
$content = file_get_contents(__DIR__ . '/file.php');
$content = strip_tags($content);
$pattern = '#[\s]+#s';
$replace = ' ';
$content = preg_replace($pattern, $replace, $content);
echo $content . PHP_EOL;
//текст
$text = 'Преобразование        нескольких      пробельных    символов    в один  ';
$text = preg_replace($pattern, $replace, $text);
echo $text . PHP_EOL;//Преобразование нескольких пробельных символов в один
//Альтернативное решение задачи
$text = 'Преобразование        нескольких      пробельных    символов    в один  ';
$pattern = "#[ \f\t\v]+#s";
$replace = ' ';
$text = preg_replace($pattern, $replace, $text);
echo $text;

/**
 * Извлечение названия HTML-страницы
 */
$content = file_get_contents(__DIR__ . '/file.php');
$pattern = '#<title>(.*)</title>#siU';
if (preg_match($pattern, $content, $matches)) {
	echo $matches[1];
}

/**
 * Преобразование даты из формата YYYY-MM-DD в DD.MM.YYYY
 */
$date = '2023-02-25';
$pattern = '#([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})#';
preg_match($pattern, $date, $matches);
echo "{$matches[3]}.{$matches[2]}.{$matches[1]}";//25.02.2023

/**
 * Проверка корректности адреса электронной почты
 */
$email = 'support@example.com';
$pattern = '#^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$#i';
if (!preg_match($pattern, $email)) {
	echo 'Вы ввели некорректный адрес электронной почты.';
} else {
	echo $email;
}
