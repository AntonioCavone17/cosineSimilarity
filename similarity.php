<?php
    function cosine_similarity($a, $b){
        $moduloA = 0;
        $moduloB = 0;
        $numeratore = 0;
        $denominatore = 0;

        $lunghezzaVettore = count($a);

        for($i = 0; $i < $lunghezzaVettore; $i++){
            $moduloA = $moduloA + pow($a[$i], 2);
            $moduloB = $moduloB + pow($b[$i], 2);
        }

        $moduloA = sqrt($moduloA);
        $moduloB = sqrt($moduloB);

        $denominatore = $moduloA * $moduloB;


        for($i = 0; $i < $lunghezzaVettore; $i++){
            $numeratore = $numeratore + $a[$i] * $b[$i];
        }


        return $numeratore/$denominatore;
    }

    echo cosine_similarity(
        [5, 1, 2, 3],
        [2, 0, 1, 5]
    )
?>