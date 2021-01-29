<?php

function reverse($angka) {
    $temp; $total = 0;

    while ($angka > 1) {
        $temp = $angka % 10;
        $total = ($total * 10) + $temp;
        $angka /= 10;
    }

    return $total;
}

function palindrome_angka($angka) {
    return ($angka <= 10) ? ++$angka : (reverse($angka) === $angka) ? $angka . "<br>" : palindrome_angka(++$angka);
}

// TEST CASES

echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>