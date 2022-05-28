<?php
$a = [1,2,3];
$iterator = new ArrayIterator($a);
print_r($iterator->current());
print_r($iterator->next());
print_r($iterator->current());
?>