<?php
declare(strict_types=1);
// Arrow function
$a = fn($x) => $x * 3;
print $a(4);
print "\n";
$b = fn($c,$d) => $c + $d;
print $b(4,5);
print "\n";
// multiple arrow
$e = fn($h,$j) => fn($c) => $h + $j + $c;
print $e(1,2)(3);
print "\n";
$t = fn($t): array => array_map(function($item) { return $item * 2; }, $t);
print_r($t([4,5,6,7]));
print "\n";
$t = fn(&$x) => $x++;
$y = 5;
print $t($y);
print $y;