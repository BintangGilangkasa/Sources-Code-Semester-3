<?php
    function luas_alas($r) {
        return pi() * pow($r, 2);
    }

    function luas_permukaan($r, $s) {
        return pi() * pow($r, 2) + (pi() * $r * $s);
    }

    $r = 5;
    $s = 6;

    echo "Luas alas dengan jari-jari {$r} adalah : " . round(luas_alas($r)), "<br>";
    echo "Luas permukaan dengan jari-jari {$r} dan garis pelukis {$s} adalah : " . round(luas_permukaan($r, $s));
?>
