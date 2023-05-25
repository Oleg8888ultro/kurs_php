<?php

header('Content-Disposition: attachment; filename="downloaded1.txt"');
readfile('text.txt');
die;

$test = 'TEST';