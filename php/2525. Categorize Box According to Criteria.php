class Solution {

    /**
     * @param Integer $length
     * @param Integer $width
     * @param Integer $height
     * @param Integer $mass
     * @return String
     */
    function categorizeBox($length, $width, $height, $mass) {
        $is_heavy = false;
        $is_bulky = false;
        $volume = $length * $width * $height;
        if(($length>=10000 || $width>=10000 || $height>=10000) || $volume>=1000000000){
            $is_bulky = true;
        }
        if($mass>=100){
            $is_heavy = true;
        }

        if($is_heavy == true && $is_bulky == true){
            return "Both";
        }
        else if($is_heavy == false && $is_bulky == false){
            return "Neither";
        }
        else if($is_heavy == true){
            return "Heavy";
        }
        else if($is_bulky == true){
            return "Bulky";
        }
    }
}
