<?php

function tukar_besar_kecil($string) {
    $len = strlen($string);
    $word = "";

    for ($i = 0; $i < $len; $i++) {
        $letter = $string[$i];

        if (ctype_alpha($letter)) {
            if (ctype_upper($letter)) {
                $word .= strtolower($letter);
            } else {
                $word .= strtoupper($letter);
            }
        } else {
            $word .= $letter;
        }
    }

    return $word . "<br>";
}

echo ctype_upper('a');

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>