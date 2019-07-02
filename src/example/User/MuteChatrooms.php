<?php
/**
 * 聊天室成员禁言
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加聊天室成员禁言
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'members'=> [
            ['id'=>'seal9901']//禁言人员 id
        ],
        'minute'=>30//禁言时长
    ];
    $MuteChatrooms = $RongSDK->User()->MuteChatrooms()->add($chatroom);
    Utils::dump("添加聊天室成员禁言",$MuteChatrooms);
}
add();

/**
 * 解除聊天室成员禁言
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'members'=> [
            ['id'=>'seal9901']//人员 id
        ],
    ];
    $MuteChatrooms = $RongSDK->User()->MuteChatrooms()->remove($chatroom);
    Utils::dump("解除聊天室成员禁言",$MuteChatrooms);
}
remove();

/**
 * 获取聊天室成员禁言列表
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        
    ];
    $MuteChatrooms = $RongSDK->User()->MuteChatrooms()->getList($chatroom);
    Utils::dump("获取聊天室成员禁言列表",$MuteChatrooms);
}
getList();