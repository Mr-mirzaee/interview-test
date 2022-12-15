<?php
function main(string $string): int
{
    if ($string == '')
        return 0;
    $min_of_delete = 0;
    $chars = str_split($string);
    $old_char = '';
    foreach ($chars as $char){
        if ($old_char == $char)
            $min_of_delete++;
        $old_char = $char;
    }
    return $min_of_delete;
}