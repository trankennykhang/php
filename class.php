<?php
class abc {
    static function test() {
        print "calling test() function";
    }
    public function test2() {
        print "calling function in ".get_class($this);
    }
}
class b extends abc{
    
}
abc::test();
$bb = new b();
$bb->test2();
?>