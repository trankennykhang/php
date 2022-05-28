<?php

$some_state = 'initial';

function gen() {
    global $some_state;

    echo "gen() execution start\n";
    $some_state = "changed";

    yield 1;
    yield 2;
    return 3;
}

function peek_state() {
    global $some_state;
    echo "\$some_state = $some_state\n";
}

echo "calling gen()...\n";
$result = gen();
print_r($result)."kenny";
echo "gen() was called\n";

peek_state();

echo "iterating...\n";
foreach ($result as $val) {
    echo "iteration: $val\n";
    peek_state();
}

?>