<?php

$arr = [1, 2, 2, 4, 5, 6, 6, 7, 7, 8, 8, 9, 11, 12, 12, 14, 4, 56, 82, 21, 88, 94, 21, 1, 1, 1];

//Подсчитываем количество одинаковых пар даже если они повторяются
function countPairs1(array $array): int
{
    //Подсчитываем количество каждого элемента в массиве и выбираем чётные и те значения которых более или равно двух
    $array = array_filter(array_count_values($array), function ($item) {
        return $item >= 2 && $item % 2 == 0;
    });;
    return array_sum($array) / 2;
}

//Подсчитываем количество одинаковых пар идущих подряд
function countPairs2($arr): int
{
    $count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] === $arr[$i + 1]) {
            $count++;
        }
    }

    return $count;
}

echo 'Результат: ' . countPairs1($arr) . '<br>';

