<?php
$t = function($a) {
    return function($a) {
        print $a;
    };
};
$t(123)(234);
?>