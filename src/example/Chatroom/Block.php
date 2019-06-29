<?php
/**
 * 聊天室人员封禁
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加封禁
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> 'OIBbeKlkx',//聊天室 id
        'members'=> [
            ['id'=>'aP9uvganV']//封禁成员 id
        ],
        'minute'=>500//封禁时长
    ];
    $Block = $RongSDK->ChatRoom()->Block()->add($chatroom);
    Utils::dump("添加封禁",$Block);
}
add();

/**
 * 解除封禁
 */
function remove()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=> 'OIBbeKlkx',//聊天室 id
        'members'=> [
            ['id'=>'aP9uvganV']//解除封禁成员 id
        ],
    ];
    $Block = $RongSDK->ChatRoom()->Block()->remove($chatroom);
    Utils::dump("解除封禁",$Block);
}
remove();

/**
 * 查询被封禁成员列表
 */
function getList()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $chatroom = [
        'id'=>'OIBbeKlkx'//聊天室 id
    ];
    $Block = $RongSDK->ChatRoom()->Block()->getList($chatroom);
    Utils::dump("查询被封禁成员列表",$Block);
}
getList();