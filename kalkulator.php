<?php
function kalkulator($nomer1, $nomer2, $operator) {
    $operators = array(
        '+' => 'pertambahan',
        '-' => 'pengurangan',
        '*' => 'perkalian',
        '/' => 'pembagian'
    );

    if (array_key_exists($operator, $operators)) {
        if ($operator == '+') {
            return $nomer1 + $nomer2;
        } elseif ($operator == '-') {
            return $nomer1 - $nomer2;
        } elseif ($operator == '*') {
            return $nomer1 * $nomer2;
        } elseif ($operator == '/') {
            if ($nomer2 != 0) {
                return $nomer1 / $nomer2;
            } else {
                return "Error: Pembagian dengan nol tidak diperbolehkan.";
            }
        }
    } else {
    }
}
$nomer1 = 10;
$nomer2 = 5;
$operator = '+';
$hasil = kalkulator($nomer1, $nomer2, $operator);
echo "Hasil dari $nomer1 $operator $nomer2 = $hasil";
?>