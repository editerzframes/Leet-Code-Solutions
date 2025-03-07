<?php

class Solution
{

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function closestPrimes($left, $right)
    {
        $primeNumbers = array();

        for ($i = $left; $i <= $right; $i++) {
            if ($this->primeNumber($i)) {
                $primeNumbers[] = $i;
            }
        }

        $output = array();
        if (count($primeNumbers) < 2) {
            $output = [-1, -1];
        }
        $difference = PHP_INT_MAX;
        foreach ($primeNumbers as $index => $value) {
            $num1 = $value;
            $num2 = $primeNumbers[$index + 1] ?? null;
            if ($num2 != null) {
                if (($num2 - $num1) < $difference) {
                    $output = [];
                    $output[] = $num1;
                    $output[] = $num2;
                    $difference = $num2 - $num1;
                }
            }
        }

        return $output;
    }

    public function primeNumber($num)
    {
        $sqrtNum = floor(sqrt($num));
        for ($i = 2; $i <= $sqrtNum; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
