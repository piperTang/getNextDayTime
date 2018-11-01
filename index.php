<?php 

// 获取下一天时间
function getNextDayTime(){
    sleep(3600*24);
    $now=date("Y-m-d H-i-s");
    echo $now;
}
// 调用函数
getNextDayTime();