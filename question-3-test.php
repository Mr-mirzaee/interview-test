<?php
require "question-3.php";

assert(min_number_swap_for_sort_array([7, 1, 3, 2, 4, 5, 6]) == 5);
assert(min_number_swap_for_sort_array([7, 1, 3, 2, 4, 6, 5]) == 4);
assert(min_number_swap_for_sort_array([7, 1, 3, 4, 5, 2, 6]) == 3);
assert(min_number_swap_for_sort_array([1, 3, 2]) == 1);
assert(min_number_swap_for_sort_array([1]) == 0);
assert(min_number_swap_for_sort_array([1, 2, 3, 4]) == 0);
assert(min_number_swap_for_sort_array([]) == 0);
assert(min_number_swap_for_sort_array([4, 3, 2, 1]) == 2);
assert(min_number_swap_for_sort_array([5, 4, 3, 2, 1]) == 2);

echo "test passed!";