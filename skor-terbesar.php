<?php

function skor_terbesar($arr) {
    array_multisort($arr, SORT_ASC);
    
    echo "Array (". "<br>";
    echo "&nbsp&nbsp&nbsp[" . $arr[0]["kelas"] . "] =>";
    print_r($arr[0]);
    echo "<br>";

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i]["kelas"] != $arr[$i - 1]["kelas"]) {
            echo "&nbsp&nbsp&nbsp[" . $arr[$i]["kelas"] . "] => ";
            print_r($arr[$i]);
            echo "<br>";
        }
    }

    echo ")";
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ]
];

print_r(skor_terbesar($skor));

/* OUTPUT
Array (
    [Laravel] => Array
        (
            [nama] => Aghnat
            [kelas] => Laravel
            [nilai] => 90
        )
    [React Native] => Array
        (
            [nama] => Regi
            [kelas] => React Native
            [nilai] => 86
        )
    [React JS] => Array
        (
            [nama] => Indra
            [kelas] => React JS
            [nilai] => 85
        )
)
*/

?>