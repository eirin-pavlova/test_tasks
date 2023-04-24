<?php
$a = "abc";
$arr = array(12, 0, 51, 3, 222, 72, 9, 8240);

$len = count($arr);
for ($i = 0; $i < $len; $i++){
    if (strrpos($arr[$i], "2") !== false) {
        $len++;
        for ($j = $len - 1; $j > $i; $j--){
            $arr[$j] = $arr[$j-1];
        }
        $i++;
        $arr[$i] = $a;
    }
}
