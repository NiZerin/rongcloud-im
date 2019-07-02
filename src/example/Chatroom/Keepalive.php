<?php
/**
 * 聊天室保活
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加保活聊天室
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> "Txtmsg03"
    ];
    $Keeplive = $RongSDK->ChatRoom()->Keepalive()->add($chatroom);
    Utils::dump("添加保活聊天室",$Keeplive);
}
add();

/**
 * 删除保活聊天室
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> "chrmId001"
    ];
    $Keeplive = $RongSDK->ChatRoom()->Keepalive()->remove($chatroom);
    Utils::dump("删除保活聊天室",$Keeplive);
}
remove();

/**
 * 获取保活聊天室
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [

    ];
    $Keeplive = $RongSDK->ChatRoom()->Keepalive()->getList($chatroom);
    Utils::dump("获取保活聊天室",$Keeplive);
}
getList();