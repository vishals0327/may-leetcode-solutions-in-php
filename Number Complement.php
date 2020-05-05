Given a positive integer, output its complement number. The complement strategy is to flip the bits of its binary representation.

Example 1:

Input: 5
Output: 2
Explanation: The binary representation of 5 is 101 (no leading zero bits), and its complement is 010. So you need to output 2.
 

Example 2:

Input: 1
Output: 0
Explanation: The binary representation of 1 is 1 (no leading zero bits), and its complement is 0. So you need to output 0.

<?php
class Solution {

    function findComplement($N) {
        if($N == 0){
            return 1;
        }
        $dec = decbin($N);
        $digits = str_split($dec);
        $decs = [];
        foreach($digits as $digit){
            $decs[] = $digit == 0 ? 1: 0;
        }
        return bindec(implode($decs));
    }
}
?>