<?php
$arr = [21,34,12,55,57,87];
$x = 12;
for($i=0;$i<count($arr);$i++){
    if($x==$arr[$i]){
        array_splice($arr,$i,1);
        for($j=$i;$j<count($arr);$j++){
            $arr[$i]=$x;
        }
    }
}
for($i=0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}
