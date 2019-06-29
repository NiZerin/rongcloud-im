<?php
/**
 * 聊天室
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 创建聊天室
 */
function create()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        ['id'=> 'php chatroom1',//聊天室 id
        'name'=> 'php chatroom1']//聊天室 name
    ];
    $result = $RongSDK->ChatRoom()->create($chatroom);
    Utils::dump("创建聊天室",$result);
}
create();

/**
 * 销毁聊天室
 */
function destory()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = ['id'=> 'php chatroom'];//聊天室 id
    $result = $RongSDK->ChatRoom()->destory($chatroom);
    Utils::dump("销毁聊天室",$result);
}
destory();

/**
 * 获取聊天室信息
 */
function get()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
                'id'=> 'OIBbeKlkx',//聊天室 id
                'count'=>10,
                'order'=>1
                ];
    $result = $RongSDK->ChatRoom()->get($chatroom);
    Utils::dump("获取聊天室信息",$result);
}
get();
die;

/**
 * 检查用户是否在聊天室
 */
function isExist()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> 'php chatroom',//聊天室 id
        'members'=>[
            ['id'=>"sea9902"]//人员id
        ]
    ];
    $result = $RongSDK->ChatRoom()->isExist($chatroom);
    Utils::dump("检查用户是否在聊天室",$result);
}
isExist();
