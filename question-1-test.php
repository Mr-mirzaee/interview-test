<?php
require "question-1.php";

assert(main("aba", 10) == 7);
assert(main("a", 10) == 10);
assert(main("hello", 10) == 0);
assert(main("dsfdsfsasfdfs", 10) == 1);
assert(main("iuuohoihjiojiojoij", 10) == 0);
assert(main("salam", 10) == 4);
echo "test passed!";