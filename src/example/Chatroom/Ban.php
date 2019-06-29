<?php
/**
 * 聊天室全局禁言
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加聊天室全局禁言
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'members'=> [
            ['id'=>'seal9901']//人员 id
        ],
        'minute'=>30//禁言时长
    ];
    $Ban = $RongSDK->ChatRoom()->Ban()->add($chatroom);
    Utils::dump("添加聊天室全局禁言",$Ban);
}
add();

/**
 * 解除聊天室全局禁言
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'members'=> [
            ['id'=>'seal9901']//人员 id
        ],
    ];
    $Ban = $RongSDK->ChatRoom()->Ban()->remove($chatroom);
    Utils::dump("解除聊天室全局禁言",$Ban);
}
remove();

/**
 * 获取聊天室全局禁言列表
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [

    ];
    $Ban = $RongSDK->ChatRoom()->Ban()->getList($chatroom);
    Utils::dump("获取聊天室全局禁言列表",$Ban);
}
getList();