<?php
function countPairs($arr) {
    $count = 0;
    $length = count($arr);

    for ($i = 0; $i < $length - 1; $i++) {
        if ($arr[$i] === $arr[$i + 1]) {
            $count++;
        }
    }

    return $count;
}
