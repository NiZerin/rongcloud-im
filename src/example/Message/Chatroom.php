<?php
/**
 * 消息模块 聊天室消息实例
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 聊天室发送消息
 */
function send()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $message = [
        'senderId'=> 'aP9uvganV',//发送人 id
        'targetId'=> ['OIBbeKlkx'],//聊天室 id
        "objectName"=>'RC:TxtMsg',//消息类型 文本
        'content'=>json_encode(['content'=>'php 聊天室 你好，主播'])//消息内容
    ];
    $Chartromm = $RongSDK->Message()->Chatroom()->send($message);
    Utils::dump("聊天室发送消息",$Chartromm);
}
send();

/**
 * 聊天室广播消息
 */
function broadcast()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $message = [
        'senderId'=> 'aP9uvganV',//发送人 id
        "objectName"=>'RC:TxtMsg',//消息类型 文本
        'content'=>json_encode(['content'=>'php 聊天室广播 你好，主播'])//消息内容
    ];
    $Chartromm = $RongSDK->Message()->Chatroom()->broadcast($message);
    Utils::dump("聊天室广播消息",$Chartromm);
}
broadcast();
