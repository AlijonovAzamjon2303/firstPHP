<?php
    // leetcode 1-masala.
    function twoSum($nums, $target) {
    $n = count($nums);
    for($i = 0; $i < $n; $i++)
    {
        for($j = $i + 1; $j < $n; $j++)
            if($nums[$i] + $nums[$j] === $target)
                return [$i, $j];
    }
}
?>
