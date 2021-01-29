<?php

function ubah_huruf($string) {
    $len = strlen($string);
    $letter;

    for ($i = 0; $i < $len; $i++) {
        $letter = $string[$i];
        ++$letter;
        $string[$i] = $letter;
    }

    return $string . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>