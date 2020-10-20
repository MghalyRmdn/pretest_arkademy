<?php
function segitiga($tinggi)
{

    for ($a = $tinggi; $a > 0; $a--) {
        for ($b = 1; $b <= $a; $b++) {
            echo "&nbsp ";
        }
        for ($c = $tinggi; $c > $a; $c--) {
            echo "o";
        }
        echo "<br/> ";
    }
}

segitiga(6);
