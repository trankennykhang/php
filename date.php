<?php
$d = new DateTime("2021-10-31");
$d->add(new DateInterval('P1D'));
print $d->format("d-m-Y");