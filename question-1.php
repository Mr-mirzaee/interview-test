<?php
function main (string $string, int $n): int
{
    $string = generate_string($string, $n);
    return count_a($string);
}
function generate_string(string $string, int $n): string
{
    $result = $string;
    while (strlen($result) < $n) {
        $result .= $string;
    }
    return substr($result, 0, $n);
}

function count_a(string $string): int
{
    $number_a = 0;
    $chars = str_split($string);
    foreach ($chars as $char) {
        if ($char == 'a')
            $number_a++;
    }
    return $number_a;
}