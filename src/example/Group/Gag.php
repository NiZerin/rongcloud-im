<?php
/**
 * 群组禁言实例
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
        'id'=> 'php group1',//群组 id
        'members'=>[ //禁言人员列表
            ['id'=> 'Vu-oC0_LQ6kgPqltm_zYtI']
        ]
        ,
        'minute'=>3000  //	禁言时长
    ];
    $result = $RongSDK->Group()->Gag()->add($group);
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
        'id'=> 'php group1',//群组 id
    ];
    $result = $RongSDK->Group()->Gag()->getList($group);
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
        'id'=> 'php group1',//群组 id
        'members'=>[ ////解除禁言人员列表
                ['id'=> 'Vu-oC0_LQ6kgPqltm_zYtI']
            ]
    ];
    $result = $RongSDK->getGroup()->Gag()->remove($group);
    Utils::dump("解除禁言",$result);
}
remove();


getList();