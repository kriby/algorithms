<?php

class InsertionSort
{
    public static function sort($a)
    {
        $len = count($a);
        for($i = 1; $i < $len; $i++) {
            for($j = $i; $j > 0 && $a[$j-1] > $a[$j]; $j--) {
                $b = $a[$j];
                $a[$j] = $a[$j-1];
                $a[$j-1] = $b;
            }
        }
        return $a;
    }
}