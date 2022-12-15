<?php
require "question-2.php";

assert(main("AAAA") == 3);
assert(main("BBBBB") == 4);
assert(main("ABABABAB") == 0);
assert(main("BABABA") == 0);
assert(main("AAABBB") == 4);
assert(main("") == 0);

echo "test passed!";