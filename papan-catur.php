<?php

function papan_catur($angka) {
    for ($i = 0; $i < $angka; $i++) {
        if ($i % 2 === 0) {
            for ($j = 0; $j < $angka; $j++) {
                echo $j != $angka - 1 ? "# " : "#<br>";
            }
        } else {
            for ($j = 1; $j < $angka; $j++) {
                echo $j != $angka - 1 ? "&nbsp#" : " #<br>";
            }
        }
    }

    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
*/

echo papan_catur(8);
/*
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # #
# # # # #
*/

?>