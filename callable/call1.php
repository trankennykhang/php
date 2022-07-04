<?php
class test1 {
    public static function hello(){
        echo "hellow from A";
    }
}
class test2 extends test1 {
    public static function hello(){
        echo "hello from B";
    }
    public function __invoke($num) {
        echo $num;
    }
}
$t = new test2();
test2::hello();
call_user_func(array('test2', 'parent::hello'));
$t(5);
call_user_func($t, '!PHP');