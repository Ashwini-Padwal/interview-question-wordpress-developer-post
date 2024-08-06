<?php
function findSecondLargest($arr) {
    if (count($arr) < 2) {
        return null;
    }
    
    
    $largest = $secondLargest = PHP_INT_MIN;
    
    
    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num > $secondLargest && $num != $largest) {
            $secondLargest = $num;
        }
    }
    
    if ($secondLargest == PHP_INT_MIN) {
        return null;
    }
    
    return $secondLargest;
}

$arr = [10, 5, 20, 10, 20, 15, 21];
echo findSecondLargest($arr);
?>
