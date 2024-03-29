<?php
/**
 * 聊天室消息降级
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加应用内聊天室降级消息
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'msgs'=> ['RC:TxtMsg03','RC:TxtMsg02']// 消息类型列表
    ];
    $Demotion = $RongSDK->ChatRoom()->Demotion()->add($chatroom);
    Utils::dump("添加应用内聊天室降级消息",$Demotion);
}
add();

/**
 * 移除应用内聊天室降级消息
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'msgs'=> ['RC:TxtMsg01','RC:TxtMsg02']// 消息类型列表
    ];
    $Demotion = $RongSDK->ChatRoom()->Demotion()->remove($chatroom);
    Utils::dump("移除应用内聊天室降级消息",$Demotion);
}
remove();

/**
 * 获取应用内聊天室降级消息
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [

    ];
    $Demotion = $RongSDK->ChatRoom()->Demotion()->getList($chatroom);
    Utils::dump("获取应用内聊天室降级消息",$Demotion);
}
getList();