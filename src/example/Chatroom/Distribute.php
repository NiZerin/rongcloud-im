<?php
/**
 * 聊天室消息分发
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;


/**
 * 停止聊天室消息分发
 */
function stop()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> "Txtmsg03"//聊天室 id
    ];
    $Demotion = $RongSDK->ChatRoom()->Distribute()->stop($chatroom);
    Utils::dump("停止聊天室消息分发",$Demotion);
}
stop();

/**
 * 恢复聊天室消息分发
 */
function resume()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> "Txtmsg03"//聊天室 id
    ];
    $Demotion = $RongSDK->ChatRoom()->Distribute()->resume($chatroom);
    Utils::dump("恢复聊天室消息分发",$Demotion);
}
resume();
