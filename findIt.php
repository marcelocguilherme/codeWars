<?php

/* Given an array of integers, find the one that appears an odd number of times.
There will always be only one integer that appears an odd number of times. */
function findIt(array $seq): int
{
    foreach ($seq as $number) {
        $arrNumeros = array_keys($seq, $number);
        if (count($arrNumeros) % 2 === 1) {
            return $number;
        }
    }
}

echo findIt([0, 0, 4, 4, 5, 5, 6, 6, 7, 7, 7, 7, 5, 5]);
