<?php
/**
 * 消息模块 历史消息实例
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 历史消息获取
 */
function get()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $message = [
        'date'=> '2019011711',//日期
    ];
    $Chartromm = $RongSDK->Message()->History()->get($message);
    Utils::dump("历史消息获取",$Chartromm);
}
get();

/**
 * 历史消息文件删除
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $message = [
        'date'=> '2018011116',//日期
    ];
    $Chartromm = $RongSDK->Message()->History()->remove($message);
    Utils::dump("历史消息文件删除",$Chartromm);
}
remove();
