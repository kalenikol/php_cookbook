<?php
function lookAndSay($s) {
    $r = ''; // возвращаемое значение
    $m = $s[0]; // подсчитываемый символ
    $n = 1; // количество обнаруженных $m}
    for ($i = 1, $j = strlen($s); $i < $j; $i++) {
        if($s[$i] == $m) {
            $n++;
        } else {
            $r .= $n.$m;
            $m = $s[$i];
            $n = 1;
        }
    }
    return $r.$n.$m;
}

for ($i = 0, $s = 1; $i < 10; $i++) {
    $s = lookAndSay($s);
    print "$s<br>";
}
