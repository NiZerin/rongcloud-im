<?php
/**
 *聊天室消息白名单实例
 */

define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加聊天室消息白名单
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'msgs'=> ["RC:TxtMsg"]//消息类型列表
    ];
    $Message = $RongSDK->ChatRoom()->Whitelist()->Message()->add($chatroom);
    Utils::dump("添加聊天室消息白名单",$Message);
}
add();

/**
 * 获取聊天室消息白名单
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [

    ];
    $Message = $RongSDK->ChatRoom()->Whitelist()->Message()->getList($chatroom);
    Utils::dump("获取聊天室消息白名单",$Message);
}
getList();

/**
 * 删除聊天室消息白名单
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'msgs'=> ["RC:TxtMsg"]//消息类型列表
    ];
    $Message = $RongSDK->ChatRoom()->Whitelist()->Message()->remove($chatroom);
    Utils::dump("删除聊天室消息白名单",$Message);
}
remove();