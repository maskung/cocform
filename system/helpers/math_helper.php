<?php
// ENCODE BINARY DIGIT
// Author : MR. SUPPANUT TANYABOON
if(!function_exists('encodeBinaryDigit')){
    function encodeBinaryDigit($input){

        $tmpInteger = 0;

        foreach($input as $val){
            $tmpInteger += 1 << ($val-1);
        }

        return $tmpInteger;
    }
}

// DECODE BINARY DIGIT
// Author : MR. SUPPANUT TANYABOON
if(!function_exists('decodeBinaryDigit')){
    function decodeBinaryDigit($input){

        $bitstring = array();
        $bitorder = array();

        $bitstring = array_reverse(str_split(decbin($input)));
        $i = 1;
        foreach ($bitstring as $bit) {
                if ($bit) $bitorder[] = $i;
                $i++;
        }

        return $bitorder;
    }
}

// Caculate Percent
// Date Add : 17/7/2557
// Date Update : 18/7/2557
if(!function_exists('percentage')){
    function percentage($val,$maximum){
      return number_format(($val / $maximum) * 100);
    }
}

?>
