class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $output = array();

        for($i=0;$i<count($nums);$i++){
            for($j=0;$j<count($nums);$j++){
                if($i != $j){
                    if(($nums[$i]+$nums[$j]) == $target){
                        array_push($output, $i);
                        array_push($output, $j);
                        return $output;
                    }
                }
            }
        }
    }
}
