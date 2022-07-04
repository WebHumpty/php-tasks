<?php

/**
 * С помощью цикла for заполните массив числами от 1 до 100
 * То есть у вас должен получится массив [1, 2, 3... 100]
 */
$a = [];
$n = 100;
for ($i = 1; $i <= $n; ++$i) {
    $a[] = $i;
}
print_r($a);

/**
 * Заполните массив числами от 1 до 10 с помощью цикла
 */
$a = [];
$n = 10;
for ($i = 1; $i <= $n; ++$i) {
    $a[] = $i;
}
print_r($a);

/**
 * Заполните массив числами от 10 до 1 с помощью цикла
 */
$a = [];
$n = 10;
for ($i = $n; $i > 0; --$i) {
    $a[] = $i;
}
print_r($a);

/**
 * Выведите с помощью цикла столбец четных чисел от 1 до 100
 */
$n = 100;
for ($i = 1; $i <= 100; ++$i) {
    if (($i % 2) == 0) {
        echo $i . PHP_EOL;
    }
}

/**
 * Выведите с помощью цикла столбец нечетных чисел от 1 до 100
 */
$n = 100;
for ($i = 1; $i <= $n; ++$i) {
    if (($i % 2) !== 0) {
        echo $i . PHP_EOL;
    }
}

/**
 * Найдите с помощью цикла сумму чисел от 1 до 100
 */
$n = 100;
$sum = 0;
for ($i = 1; $i <= $n; ++$i) {
    $sum += $i;
}
echo $sum;

/**
 * Найдите с помощью цикла сумму квадратов чисел от 1 до 15
 */
$n = 15;
$sum = 0;
for ($i = 1; $i <= $n; ++$i) {
    $sum += $i * $i;
}
echo $sum;

/**
 * Заполните массив 10-ю иксами с помощью цикла
 */
$n = 10;
$a = [];
for ($i = 1; $i <= $n; ++$i) {
    $a[] = 'x';
}
print_r($a);

/**
 * Заполните массив 10-ю случайными числами от 1 до 10 с помощью цикла
 */
$n = 10;
$a = [];
for ($i = 1; $i <= $n; ++$i) {
    $a[] = mt_rand(1, 10);
}
print_r($a);

/**
 * С помощью цикла создайте строку из 6-ти символов,
 * состоящую из случайных чисел от 1 до 9
 */
$n = 6;
$string = '';
for ($i = 1; $i <= $n; ++$i) {
    $string .= mt_rand(1, 9);
}
echo $string;

/**
 * Дан массив с числами $a 1, 2, 3, 4, 6, 9, 11
 * С помощью цикла найдите сумму элементов этого массива
 */
$a = [1, 2, 3, 4, 6, 9, 11];
$sum = 0;
$n = count($a);
for ($i = 0; $i < $n; ++$i) {
    $sum += $a[$i];
}
echo $sum;

/**
 * Дан массив с числами $a 1, 2, 3, 4, 6, 9, 11
 * С помощью цикла найдите сумму квадратов элементов этого массива
 */
$a = [1, 2, 3, 4, 6, 9, 11];
$sum = 0;
$n = count($a);
for ($i = 0; $i < $n; ++$i) {
    $sum += $a[$i] * $a[$i];
}
echo $sum;

/**
 * Дан массив с числами $a 1, 2, 3, 4, 6, 9, 11
 * С помощью цикла найдите корень из суммы квадратов элементов этого массива
 * Результат округлите в меньшую сторону до целых
 */
$a = [1, 2, 3, 4, 6, 9, 11];
$sum = 0;
$n = count($a);
for ($i = 0; $i < $n; ++$i) {
    $sum += $a[$i] * $a[$i];
}
echo floor(sqrt($sum));

/**
 * Дан массив с числами -1, 1, 2, 12, 3, -2, 4, 0, 6, 9, 11
 * Найдите сумму тех элементов массива, которые больше 0 и меньше 10
 */
$a = [-1, 1, 2, 12, 3, -2, 4, 0, 6, 9, 11];
$sum = 0;
$n = count($a);
for ($i = 0; $i < $n; ++$i) {
    if ($a[$i] > 0 && $a[$i] < 10) {
        $sum += $a[$i];
    }
}
echo $sum;

/**
 * С помощью цикла сформируйте строку '1223334444...'
 * и так далее до заданного числа
 */
$string = '';
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j > 0; --$j) {
        $string .= $i;
    }
}
echo $string;
echo PHP_EOL;
$string = '';
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $string .= $i;
    }
}
echo $string;

/**
 * Дан многомерный массив (см. его под задачей)
 * С помощью цикла выведите строки в формате 'имя, зарплата'
 */
$a = [
    0 => ['name' => 'Коля', 'salary' => 300],
    1 => ['name' => 'Вася', 'salary' => 400],
    2 => ['name' => 'Петя', 'salary' => 500],
];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    echo "Имя: {$a[$i]['name']}, зарплата: {$a[$i]['salary']}" . PHP_EOL;
}

/**
 * Заполните двумерный массив случайными числами от 1 до 10
 * В каждом подмассиве должно быть по 10 элементов
 * Должно быть 10 подмассивов
 */
$a = [];
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        $a[$i][$j] = mt_rand(1, 10);
    }
}
print_r($a);

/**
 * Дано число, например 30
 * У этого числа есть делители - числа, на которое оно делится без остатка
 * Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30
 * Задача: сделайте массив делителей нашего числа
 * Число может быть любым, не обязательно, 30
 */
$n = 30;
$a = [];
for ($i = 1; $i <= $n; $i++) {
    if (($n % $i) === 0) {
        $a[] = $i;
    }
}
print_r($a);

/**
 * Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
 * Узнайте, сколько первых элементов массива нужно сложить,
 * чтобы сумма получилась больше 10, выведите эти элементы
 */
$x = 10;
$sum = 0;
$b = [];
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    $sum += $a[$i];
    $b[] = $a[$i];
    if ($sum > $x) {
        break;
    }
}
echo count($b) . PHP_EOL;
print_r($b);

/**
 * Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
 * надо найти сумму нечетных чисел до числа 6
 */
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$x = 6;
$sum = 0;
$n = count($a);
for ($i = 0; $i < $n && $a[$i] != $x; $i++) {
    if (($a[$i] % 2) !== 0) {
        $sum += $a[$i];
    }
}
echo $sum;

/**
 * Напишите цикл, который принимает массив с разными повторяющимися числами,
 * а возвращает массив тех же чисел, но уже без повторов.
 * Пример входных параметров 1, 3, 2, 2, 3, 0
 * Ожидается на выходе 1, 3, 2, 0
 */
$a = [1, 3, 2, 2, 3, 0];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    for ($j = ($i + 1); $j < $n; $j++) {
        if (isset($a[$j]) && ($a[$i] == $a[$j])) {
            unset($a[$j]);
        }
    }
    $a = array_values($a);
}
print_r($a);

/**
 * Напишите цикл, который принимает массив с разными числами,
 * а возвращает массив с тем же порядком, но всеми нулями перемещенными в конец
 * Пример входных параметров 3, 0, 0, 1, 2, 0, 5, 4, 3, 3
 * Ожидается на выходе 3, 1, 2, 5, 4, 3, 3, 0, 0, 0
 */
$b = [];
$a = [3, 0, 0, 1, 2, 0, 5, 4, 3, 3];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    if ($a[$i] == 0) {
        $b[] = $a[$i];
        unset($a[$i]);
    }
}
$a = array_merge($a, $b);
print_r($a);

/**
 * Напишите скрипт, который проверяет, является ли данное число простым
 * (простое число - это то, которое делится только на 1 и на само себя)
 */
$n = 31;
$a = [];
$isFlag = true;
for ($i = 2; $i < $n; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) == 0) {
            $isFlag = false;
        }
    }

    if ($isFlag) {
        $a[] = $i;
    } else {
        $isFlag = true;
    }
}
print_r($a);

/**
 * Даны две строки с одинаковым количеством символов,
 * найте какое количество символов не совпадает
 * 'Привит мир!', 'Привет Вова'
 */
$firstString = 'Привит мир!';
$secondString = 'Привет Вова';
$splitFirst = mb_str_split($firstString);
$splitSecond = mb_str_split($secondString);
$n = count($splitFirst);
$count = 0;
$symbol = [];
for ($i = 0; $i < $n; $i++) {
    if ($splitFirst[$i] !== $splitSecond[$i]) {
        $count++;
        $symbol[] = $splitFirst[$i] . ' ' . $splitSecond[$i];
    }
}
echo $count;
print_r($symbol);

/**
 * Дан массив целых чисел
 * Все элементы, оканчивающиеся цифрой 4, уменьшить вдвое
 * 14.5, 24, 1, 2, 31, 41, 1, 44, 3, 54, 3, 104, 55
 */
//вариант 1
$x = 4;
$a = [14.5, 24, 1, 2, 31, 41, 1, 44, 3, 54, 3, 104, 55];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    $lastSymbol = substr((string)$a[$i], -1);
    if ($lastSymbol == $x) {
        $a[$i] /= 2;
    }
}
print_r($a);
//вариант 2
$x = 4;
$a = [14.5, 24, 1, 2, 31, 41, 1, 44, 3, 54, 3, 104, 55];
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    if (abs($a[$i] % 10) == $x) {
        $a[$i] /= 2;
    }
}
print_r($a);

/**
 * Найти число пар соседних элементов массива, являющихся четными числами
 * 2, 2, 1, 3, 2, 4, 3, 3
 */
$count = 0;
$a = [2, 2, 1, 3, 2, 4, 3, 3];
$n = count($a) - 1;
for ($i = 0; $i < $n; $i++) {
    if ((($a[$i] % 2) == 0) && (($a[$i + 1] % 2) == 0)) {
        $count++;
    }
}
echo $count;

/**
 * Выведите на экран следующую пирамидку
 * x
 * xx
 * xxx
 * xxxx
 * xxxxx
 * xxxxxx
 * xxxxxxx
 * xxxxxxxx
 * xxxxxxxxx
 */
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo 'x';
    }
    echo PHP_EOL;
}

for ($i = 0; $i < $n; $i++) {
    echo str_repeat('x', $i) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 * xxxxxxxxxx
 */
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    if (($i % 2) === 0) {
        for ($j = 1; $j <= $i; $j++) {
            echo 'x';
        }
        echo PHP_EOL;
    }
}

for ($i = 1; $i <= $n; $i++) {
    if (($i % 2) === 0) {
        echo str_repeat('x', $i) . PHP_EOL;
    }
}

/**
 * Выведите на экран следующую пирамидку
 * 111
 * 222
 * 333
 * 444
 * 555
 * 666
 * 777
 * 888
 * 999
 */
$n = 9;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat((string)$i, 3) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * 1
 * 22
 * 333
 * 4444
 * 55555
 * 666666
 * 7777777
 * 88888888
 * 999999999
 */
$n = 9;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat((string)$i, $i) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * 1
 * 333
 * 55555
 * 7777777
 * 999999999
 */
$n = 9;
for ($i = 1; $i <= $n; $i++) {
    if ($i === 1 || $i === 3 || $i === 5 || $i === 7 || $i === 9) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo PHP_EOL;
    }
}

$numbers = [1, 3, 5, 7, 9];
for ($i = 1; $i <= $n; $i++) {
    if (in_array($i, $numbers)) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo PHP_EOL;
    }
}

$numbers = [1, 3, 5, 7, 9];
for ($i = 1; $i <= $n; $i++) {
    if (in_array($i, $numbers)) {
        echo str_repeat((string)$i, $i) . PHP_EOL;
    }
}

/**
 * Выведите на экран следующую пирамидку
 * xxxxx
 * xxxx
 * xxx
 * xx
 * x
 */
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo 'x';
    }
    echo PHP_EOL;
}

for ($i = $n; $i >= 1; $i--) {
    echo str_repeat((string)$i, $i) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * xxxxxxxxxx
 * xxxxxxxx
 * xxxxxx
 * xxxx
 * xx
 */
$n = 10;
for ($i = $n; $i >= 1; $i--) {
    if (($i % 2) === 0) {
        for ($j = 1; $j <= $i; $j++) {
            echo 'x';
        }
        echo PHP_EOL;
    }
}

for ($i = $n; $i >= 1; $i--) {
    if (($i % 2) === 0) {
        echo str_repeat('x', $i) . PHP_EOL;
    }
}

/**
 * Выведите на экран следующую пирамидку
 * 999999999
 * 88888888
 * 7777777
 * 666666
 * 55555
 * 4444
 * 333
 * 22
 * 1
 */
$n = 9;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = $n; $i >= 1; $i--) {
    echo str_repeat((string)$i, $i) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * 12345
 * 12345
 * 12345
 * 12345
 * 12345
 */
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat((string)$i, $n) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * 11111
 * 22222
 * 33333
 * 44444
 * 55555
 */
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat((string)$i, $n) . PHP_EOL;
}

/**
 * Выведите на экран следующую пирамидку
 * 55555
 * 44444
 * 33333
 * 22222
 * 11111
 */
$n = 5;
for ($i = $n; $i > 0; $i--) {
    for ($j = 1; $j <= $n; $j++) {
        echo $i;
    }
    echo PHP_EOL;
}

for ($i = $n; $i > 0; $i--) {
    echo str_repeat((string)$i, $n) . PHP_EOL;
}

/**
 * Вывести циклом цифры
 * 54321
 * 54321
 * 54321
 * 54321
 * 54321
 */
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n; $j > 0; $j--) {
        echo $j;
    }
    echo PHP_EOL;
}

/**
 * Вывести циклом цифры
 * 1  2  3  4  5
 * 6  7  8  9  10
 * 11 12 13 14 15
 * 16 17 18 19 20
 * 21 22 23 24 25
 */
$n = 25;
$count = 1;
for ($i = 1; $i <= $n; $i++) {
    $indent = ($i < 10) ? '  ' : ' ';
    echo $i . $indent;
    if ($count == 5) {
        echo PHP_EOL;
        $count = 0;
    }
    $count++;
}

/**
 * Вывести циклом цифры
 * 1 1 1 1 1 1
 * 1 1 1 1 1 1
 * 7 7 7 7 7 7
 * 7 7 7 7 7 7
 * 8 8 8 8 8 8
 * 8 8 8 8 8 8
 */
$n = 6;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i <= 2) {
            echo 1 . ' ';
        } elseif ($i === 3 || $i === 4) {
            echo 7 .' ';
        } else {
            echo 8 . ' ';
        }
    }
    echo PHP_EOL;
}

/**
 * Вывести циклом цифры
 * 1 1 2 2 3 3
 * 1 1 2 2 3 3
 * 1 1 2 2 3 3
 * 1 1 2 2 3 3
 * 1 1 2 2 3 3
 * 1 1 2 2 3 3
 */
$n = 6;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j === 1 || $j === 2) {
            echo 1 . ' ';
        } elseif ($j === 3 || $j === 4) {
            echo 2 . ' ';
        } elseif ($j === 5 || $j === 6) {
            echo 3 . ' ';
        }
    }
    echo PHP_EOL;
}

