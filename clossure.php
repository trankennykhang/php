<?php
$message = 'hello';

// No "use"
$container = [];
$container['session_storage'] = function () {
    $a = 'world';
    return function($a, $c) {
        echo $a.' & '.$c;
    };
};

print_r($container['session_storage']()('abc', 'test'));


?>