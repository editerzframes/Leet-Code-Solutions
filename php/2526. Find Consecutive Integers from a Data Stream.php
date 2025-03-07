class DataStream {
    protected $value;
    protected $k;
    protected $counter = 0;
    /**
     * @param Integer $value
     * @param Integer $k
     */
    function __construct($value, $k) {
        $this->value = $value;
        $this->k = $k;
        $this->counter = 0;
    }
  
    /**
     * @param Integer $num
     * @return Boolean
     */
    function consec($num) {
        if ($num == $this->value) {
            $this->counter++;
        } else {
            $this->counter = 0;
        }
        return $this->counter >= $this->k;
    }
}

/**
 * Your DataStream object will be instantiated and called as such:
 * $obj = DataStream($value, $k);
 * $ret_1 = $obj->consec($num);
 */
