<?php
class MergeSort
{
    public static function sort($a)
    {
        $len = count($a);
        $mid = $len / 2;
        if ($len > 1) {
            // split array into two parts
            $leftPart = array_slice($a, 0, $mid);
            $rightPart = array_slice($a, $mid, $mid+1);

            // split and do merge sort recursively
            $leftPart = self::sort($leftPart);
            $rightPart = self::sort($rightPart);

            // merge two ordered arrays into one
            $leftIndex = $rightIndex = 0;

            for ($i = 0; $i < $len ; $i++) {
                if ($leftIndex == count($leftPart)) {
                    $a[$i] = $rightPart[$rightIndex];
                    $rightIndex++;
                } elseif ($rightIndex == count($rightPart)) {
                    $a[$i] = $leftPart[$leftIndex];
                    $leftIndex++;
                } elseif ($leftPart[$leftIndex] > $rightPart[$rightIndex]) {
                    $a[$i] = $rightPart[$rightIndex];
                    $rightIndex++;
                } else {
                    $a[$i] = $leftPart[$leftIndex];
                    $leftIndex++;
                }
            }
            return $a;
        }
        return $a;
    }
}
