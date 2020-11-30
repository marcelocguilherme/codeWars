<?php
function descendingOrder(int $n): int
{
    $n = (string) $n;
    $arrayInt = str_split($n);
    rsort($arrayInt);
    return implode($arrayInt);

}

echo descendingOrder(234444567);
