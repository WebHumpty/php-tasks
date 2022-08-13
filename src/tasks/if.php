<?php


/**
 * Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 1;
if (0 === $a) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 1;
if ($a > 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a меньше нуля, то выведите 'Верно', иначе выведите 'Неверно
 */
$a = 1;
if ($a < 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 1;
if ($a >= 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 1;
if ($a <= 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 'test';
if ('test' === $a) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно
 */
$a = '1';
if ('1' === $a) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = '';
if (empty($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'
 */
$a = 'test';
if (!empty($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

/**
 * Проверить, является ли буква прописной или строчной
 */
$char = 'F';
if (ctype_upper($char)) {
    echo 'Заглавная';
} else {
    echo 'Строчная';
}
//Вариант для кириллицы в кодировке UTF-8
$char = 'П';
if (mb_strtolower($char) !== $char) {
    echo 'Заглавная';
} else {
    echo 'Строчная';
}

/**
 * Найти минимум из двух чисел 3, 5
 */
$a = 3;
$b = 5;
if ($a < $b) {
    echo $a;
} elseif ($a > $b) {
    echo $b;
} elseif ($a == $b) {
    echo $a;
}

/**
 * Найти минимум из трех чисел 3, 7, 4
 */
$a = 3;
$b = 7;
$c = 4;
if ($a > $b && $a > $c) {
    echo $a;
} elseif ($b > $a && $b > $c) {
    echo $b;
} elseif ($c > $a && $c > $b) {
    echo $c;
}

/**
 * В переменной $day находится число из интервала от 1 до 31
 * Определите в какую декаду месяца попадает это число
 * (в первую, вторую или третью)
 */
$day = mt_rand(1, 31);
$decade = 0;
if ($day < 10) {
    $decade = 1;
} elseif ($day >= 11 && $day <= 20) {
    $decade = 2;
} elseif ($day >= 21 && $day <= 31) {
    $decade = 3;
}
echo $decade;

/**
 * В переменной $month находится число из интервала от 1 до 12
 * Определите в какую пору года попадает этот месяц
 * (зима, весна, лето, осень)
 */
$month = mt_rand(1, 12);
if (($month == 1 || $month == 2) || $month == 12) {
    echo 'Зима';
} elseif ($month >= 3 && $month <= 5) {
    echo 'Весна';
} elseif ($month >= 6 && $month <= 8) {
    echo 'Лето';
} elseif ($month >= 9 && $month <= 11) {
    echo 'Осень';
}

/**
 * Вывести название дня недели
 */
$day = 3;
if ($day == 1) {
    echo 'Понедельник';
} elseif ($day == 2) {
    echo 'Вторник';
} elseif ($day == 3) {
    echo 'Среда';
} elseif ($day == 4) {
    echo 'Четверг';
} elseif ($day == 5) {
    echo 'Пятница';
} elseif ($day == 6) {
    echo 'Суббота';
} elseif ($day == 7) {
    echo 'Воскресенье';
}

/**
 * Дана строка с цифрами, например, '12345'
 * Проверьте, что первые 3 символа в этой строке являются цифры 1, 2 или 3
 * Если это так – выведите 'да', в противном случае выведите 'нет'
 */
$string = '12345';
if ($string[0] === '1' && $string[1] === '2' && $string[2] === '3') {
    echo 'Да';
} else {
    echo 'Нет';
}

/**
 * Дана строка с цифрами, например, '212345'
 * Проверьте, что первым символом этой строки является цифра 1, 2 или 3
 * Если это так – выведите 'да', в противном случае выведите 'нет'
 */
$string = '212345';
if ($string[0] === '1' || $string[0] === '2' || $string[0] === 3) {
    echo 'Да';
} else {
    echo 'Нет';
}

$firstSymbol = $string[0];
if ($firstSymbol >= 1 && $firstSymbol <= 3) {
    echo 'Да';
} else {
    echo 'Нет';
}

/**
 * Напишите консольную программу, в которую пользователь вводит с клавиатуры два числа.
 * А программа сранивает два введенных числа и выводит на консоль результат сравнения
 * (два числа равны, первое число больше второго или первое число меньше второго).
 */
echo 'Введите первое число:';
$number1 = (int)readline();
echo 'Введит второе число:';
$number2 = (int)readline();
if ($number1 === $number2) {
    echo 'Оба числа равны.';
} else if ($number1 > $number2) {
    echo 'Первое число больше второго.';
} else {
    echo 'Первое число меньше второго.';
}

/**
 * Напишите консольную программу, в которую пользователь вводит с клавиатуры число.
 * Если число одновременно больше 5 и меньше 10,
 * то программа выводит "Число больше 5 и меньше 10".
 * Иначе программа выводит сообщение "Неизвестное число".
 */
echo 'Введите число:';
$number = readline();
if ($number > 5 && $number < 10) {
    echo 'Число больше 5 и меньше 10.';
} else {
    echo 'Неизвестное число.';
}

/**
 * Напишите консольную программу,
 * в которую пользователь вводит с клавиатуры число.
 * Если число либо равно 5, либо равно 10,
 * то программа выводит "Число либо равно 5, либо равно 10".
 * Иначе программа выводит сообщение "Неизвестное число".
 */
echo 'Введите число:';
$number = (int)readline();
if ($number === 5 || $number === 10) {
    echo 'Число либо равно 5, либо равно 10.';
} else {
    echo 'Неизвестное число.';
}

/**
 * В банке в зависимости от суммы вклада начисляемый процент по вкладу может отличаться.
 * Напишите консольную программу, в которую пользователь вводит сумму вклада.
 * Если сумма вклада меньше 100, то начисляется 5%.
 * Если сумма вклада от 100 до 200, то начисляется 7%.
 * Если сумма вклада больше 200, то начисляется 10%.
 * В конце программа должна выводить сумму вклада с начисленными процентами.
 */
echo 'Введите сумму вклада: ';
$sum = readline();
if ($sum < 100) {
    $sum += ($sum * 0.05);
} elseif ($sum <= 200) {
    $sum += ($sum * 0.07);
} else {
    $sum += ($sum * 0.1);
}
echo 'Сумма вклада после начисления процентов, составит: ' . $sum;

/**
 * Изменим предыдущую задачу.
 * Допустим, банк периодически начисляет по всем вкладам кроме процентов бонусы.
 * И, допустим, сейчас банк решил доначислить
 * по всем вкладам 15 единиц вне зависимости от их суммы.
 * Измените программу таким образом, чтобы к финальной сумме дочислялись бонусы.
 */
echo 'Введите сумму вклада: ';
$sum = readline();
$bonus = 15;
if ($sum < 100) {
    $percent = 0.05;
} elseif ($sum <= 200) {
    $percent = 0.07;
} else {
    $percent = 0.1;
}
$sum += ($sum * $percent) + $bonus;
echo 'Сумма вклада после начисления процентов + бонус, составит: ' . $sum;

/**
 * Напишите консольную программу.
 * Введите в консоль два числа a и b.
 * Программа определяет наименьшее из них, либо сообщает, что числа равны.
 */
echo 'Введит число: ';
$a = readline();
echo 'Введите число: ';
$b = readline();
if ($a > $b) {
    echo 'Первое число больше второго.';
} elseif ($a < $b) {
    echo 'Первое число меньше второго.';
} elseif ($a == $b) {
    echo 'Оба числа равны.';
}

/**
 * Ученик сдал 3 экзамена и получил три оценки по 10 бальной шкале.
 * Оценки по каждому экзамену формируются программой случайным образом.
 * Программа оценивает, как готовился ученик к сдаче каждого экзамена – плохо или хорошо.
 */
$mathematics = mt_rand(1, 10);
$physics = mt_rand(1, 10);
$english = mt_rand(1, 10);
if ($mathematics < 5) {
    echo 'Плохо' . PHP_EOL;
} else {
    echo 'Хоршо' . PHP_EOL;
}

if ($physics < 5) {
    echo 'Плохо' . PHP_EOL;
} else {
    echo 'Хорошо' . PHP_EOL;
}

if ($english < 5) {
    echo 'Плохо' . PHP_EOL;
} else {
    echo 'Хорошо' . PHP_EOL;
}

/**
 * Спортсмен на соревнованиях стреляет три раза по трем мишеням.
 * За каждое попадание дается один балл.
 * Программа выводит результат каждого выстрела
 * и общее количество баллов спортсмена.
 * Результат каждого выстрела формируется программой случайным образом.
 */
$first = mt_rand(0, 1);
$second = mt_rand(0, 1);
$third = mt_rand(0, 1);
$result = 0;
if ($first === 1) {
    echo 'Попал' . PHP_EOL;
    $result += 1;
} else {
    echo 'Промахнулся' . PHP_EOL;
    $result += 0;
}
if ($second === 1) {
    echo 'Попал' . PHP_EOL;
    $result += 1;
} else {
    echo 'Промахнулся' . PHP_EOL;
    $result += 0;
}
if ($third === 1) {
    echo 'Попал' . PHP_EOL;
    $result += 1;
} else {
    echo 'Промахнулся' . PHP_EOL;
    $result += 0;
}
echo $result;

/**
 * Введите в консоль число a. Программа определяет а больше, меньше или равно 0.
 */
echo 'Введите число:';
$a = readline();
if ($a > 0) {
    echo $a . ' > 0';
} elseif ($a < 0) {
    echo $a . ' < 0';
} elseif ($a == 0) {
    echo $a . ' = 0';
}

/**
 * Даны три числа. Написать "да",
 * если среди них есть одинаковые.
 */
$a = 5;
$b = 4;
$c = 4;
if ($a == $b || $a == $c) {
    echo 'да';
} elseif ($b == $a || $b == $c) {
    echo 'да';
} elseif ($c == $a || $c == $b) {
    echo 'да';
}
