<?php
class ShellSort
{
    public static function sort($array)
    {
        $len = count($array);
        $gap = [1, 2, 3, 4, 6];
        while(!empty($gap)) {
            $step = array_pop($gap);
            for($i = $step; $i < $len; $i+=$step) {
                if($i>=$len) {
                    continue;
                }
                for($j = $i; $j >= $step && $array[$j-$step] > $array[$j]; $j-=$step) {
                    $b = $array[$j];
                    $array[$j] = $array[$j-$step];
                    $array[$j-$step] = $b;
                }
            }
        }
        return $array;
    }    
}
