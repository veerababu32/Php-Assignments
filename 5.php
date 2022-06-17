<?php
    $num_arr = [1,4,6,2,10,40,20,0,60];
    $largest_num = $num_arr[1];
    $smallest_num = $num_arr[5];
    for ($i = 0; $i < count($num_arr); $i++) {
        $res = $num_arr[$i];
        if ($res > $largest_num) {
            $largest_num = $res;
        }
        elseif ($res < $smallest_num) {
            $smallest_num = $res;
        }
    };
    echo("The largest number is ".$largest_num ."<br>");
    echo("The smallest number is ".$smallest_num);
?>