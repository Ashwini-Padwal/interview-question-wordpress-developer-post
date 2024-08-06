<?php
function printNumbers() {
    for ($i = 1; $i <= 55; $i++) {
        if ($i % 2 == 0 && $i % 3 == 0) {
            echo "divisible by both\n<br>";
        } elseif ($i % 2 == 0) {
            echo "even\n<br>";
        } elseif ($i % 3 == 0) {
            echo "multiplication of 3\n<br>";
        } else {
            echo $i . "\n<br>";
        }
    }
}
printNumbers();
?>
