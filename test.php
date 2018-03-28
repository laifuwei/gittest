<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 16:55
 */
function test(){
    //生成订单号
    $order = 'YDM';
    $order .= date('YmdHis');
    //构造随机部分
    $str = '1234567890';
    for($i = 0;$i < 10;$i++){
        $order .= $str[mt_rand(0,strlen($str) - 1)];
    }
    $order .= rand(10000,99999);
    return $order;
}