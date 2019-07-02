<?php
/**
 * 全局群组禁言实例
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加群组禁言
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $group = [
        'members'=>[ //禁言人员列表
            ['id'=> 'Vu-oC0_LQ6kgPqltm_zYtI']
        ],
        'minute'=>3000  //	禁言时长
    ];
    $result = $RongSDK->User()->MuteGroups()->add($group);
    Utils::dump("添加群组禁言",$result);
}
add();
/**
 * 查询禁言成员列表
 */
function getList()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $group = [

    ];
    $result = $RongSDK->User()->MuteGroups()->getList($group);
    Utils::dump("查询禁言成员列表",$result);
}
getList();
/**
 * 解除禁言
 */
function remove()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $group = [
        'members'=>[ ////解除禁言人员列表
                ['id'=> 'Vu-oC0_LQ6kgPqltm_zYtI']
            ]
    ];
    $result = $RongSDK->User()->MuteGroups()->remove($group);
    Utils::dump("解除禁言",$result);
}
remove();


getList();