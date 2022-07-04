<?php
// First class callable
$callable = Closure::fromCallable('strtoupper');
echo $callable('foo'); // FOO

$upper = 'strtoupper';
echo $upper('foop');
$str = strtoupper(...);
echo $str('fooo');

class dog {
    private function name(){
        return "abc";
    }
    public function getName() {
        return [$this, 'name'];
    }
}
$d = new dog();
$t = $d->getName();
echo $t();