<?php

function pasangan_terbesar($angka) {
    $angka = (string) $angka;
    $len = strlen($angka);
    $total; $max = 0;

    for ($i = 0; $i < $len - 1; $i++) {
        $total = (int) $angka[$i] * 10 + (int) $angka[$i + 1];
        if ($total > $max) $max = $total;
    }

    return $max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>