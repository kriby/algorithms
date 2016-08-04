<?php
require_once 'ShellSort.php';

class ShellSortTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param $input
     * @param $output
     * @dataProvider dataProviderTestShellSort
     */
    public function testShellSort($input, $output)
    {
        PHPUnit_Framework_Assert::assertEquals($output, ShellSort::sort($input));
    }
    
    public function dataProviderTestShellSort()
    {
        return [
          [[4, 6, 84, 1, 3, 9, 24, 86, 5, 7 ,83, 2, 8, 20], [1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 24, 83, 84, 86]],  
          [[4, 6, 84, 1, 3, 9, 24, 86, 5, 7 ,83, 2, 8], [1, 2, 3, 4, 5, 6, 7, 8, 9, 24, 83, 84, 86]],  
          [[1, 2], [1, 2]],  
          [[2, 2, 3], [2, 2, 3]],  
          [[2], [2]],  
        ];     
    }
}