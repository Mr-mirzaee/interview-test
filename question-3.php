<?php
function min_number_swap_for_sort_array(array $array): int
{
    $number_swap = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i + 1 == $array[$i])
            continue;
        $index = array_search($i + 1 , $array);
        swap($array[$i], $array[$index]);
        $number_swap++;
    }
    return $number_swap;
}
function swap(int &$i, int &$j): void
{
    $c = $i;
    $i = $j;
    $j = $c;
}