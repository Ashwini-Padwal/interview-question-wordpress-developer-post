<?php
function findMissingElements($arr) {
    
    if (empty($arr)) {
        return []; 
    }

   
    $min = min($arr);
    $max = max($arr);


    $fullRange = range($min, $max);

    $missingElements = array_diff($fullRange, $arr);

    sort($missingElements);

    return $missingElements;
}

$arr = [1, 2, 3, 4, 9, 10, 12];
$missingElements = findMissingElements($arr);
print_r($missingElements);
?>
