<?php function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
        //  7*6*5*4*3*2*1
    }
}

// input dan hasil
$number = 7;
$result = factorial($number);
echo "Faktorial dari $number adalah $result.";
?>