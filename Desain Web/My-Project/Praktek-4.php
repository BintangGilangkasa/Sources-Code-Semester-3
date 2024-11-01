<?php
    $r = 60;
    $t = 85;
    $volume_tabung = 3.14  * pow($r, exponent: 2) * $t;

    echo "Volume dari jari-jari {$r} dan tinggi {$t} : ". round($volume_tabung);
?>