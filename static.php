<?php

$output = "fdafaf".`ls -al`;
echo $output;

// String can break down to array
$a = 'abcd';
echo $a[1];
//The full list of field-name characters that PHP converts to _ (underscore) is the following (not just dot):
//chr(32) ( ) (space)
//chr(46) (.) (dot)
//chr(91) ([) (open square bracket)
//chr(128) - chr(159) (various)
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}
test();
test();
?>