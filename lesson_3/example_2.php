<?php
/**
 * @param array $array
 */
function countingSort(array &$array, &$itNum): void
{
    $n = count($array);

    $max = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($max < $array[$i]) {
            $max = $array[$i];
        }
        $itNum++;
    }

    $frequency = [];

    for ($i = 0; $i < $max + 1; $i++) {
        $frequency[$i] = 0;

        $itNum++;
    }

    for ($i = 0; $i < $n; $i++) {
        $frequency[$array[$i]]++;
        $itNum++;
    }

    for ($i = 0, $j = 0; $i <= $max; $i++) {
        while ($frequency[$i] > 0) {
            $array[$j] = $i;
            $j++;
            $frequency[$i]--;
            $itNum++;
        }
    }
}
