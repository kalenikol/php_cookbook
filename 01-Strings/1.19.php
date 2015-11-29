<?php
$s = 'Once upon a time there was a turtle';
$words = explode(' ', $s);
$words = array_reverse($words);
$s = implode(' ', $words);
print $s;