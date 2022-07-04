<?php
$call = function(callable $fn) {
    return function($b=1, $c=2) use ($fn) {
        return $b * $c * $fn();
    };
};
echo $call(function(){
    return 20;
})(5,6);
?>