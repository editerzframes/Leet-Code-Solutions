<?php

class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function closestPrimes($left, $right) {
        
        $primeNumbers = array();

        $prime = array_fill(0, $right + 1, true);

        for ($p = 2; $p*$p <= $right; $p++)
        {
            if ($prime[$p] == true)
            {
                for ($i = $p*$p; $i <= $right; $i += $p)
                    $prime[$i] = false;
            }
        }
    
        // Print all prime numbers
        for ($p = $left; $p <= $right; $p++)
            if ($p > 1 && $prime[$p])
                $primeNumbers[] = $p;

        $output = array();
        if(count($primeNumbers) < 2){
            $output = [-1, -1];
        }
        $difference = PHP_INT_MAX;
        foreach($primeNumbers as $index => $value){
            $num1 = $value;
            $num2 = $primeNumbers[$index+1] ?? null;
            if($num2 != null){
                if(($num2 - $num1) < $difference){
                    $output = [];
                    $output[] = $num1;
                    $output[] = $num2;
                    $difference = $num2 - $num1;
                }
            }
        }

        return $output;
    }

    public function primeNumber($num){
        $sqrtNum = floor(sqrt($num));
        for($i=2;$i<=$sqrtNum;$i++){
            if($num%$i==0){
                return false;
            }
        }
        return true;
    }
}
