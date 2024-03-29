<?php
/**
 * 敏感词实例
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use Rongcloud\Lib\Utils;

/**
 * 添加敏感词
 */
function add()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $sensitive = [
        'replace'=> '***',//敏感词替换，最长不超过 32 个字符， 敏感词屏蔽可以为空
        'keyword'=>"abc",//敏感词
        'type'=>0// 0: 敏感词替换 1: 敏感词屏蔽
    ];
    $result = $RongSDK->Sensitive()->add($sensitive);
    Utils::dump("添加敏感词",$result);
}
add();

/**
 * 删除敏感词
 */
function remove()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $sensitive = [
        'keywords'=>["cccccdddd"]//删除敏感词
    ];
    $result = $RongSDK->Sensitive()->remove($sensitive);
    Utils::dump("删除敏感词",$result);
}
remove();

/**
 * 获取敏感词列表
 */
function getList()
{

    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $sensitive = [
        'type'=> '',//敏感词类型，0: 敏感词替换， 1: 敏感词屏蔽， 为空获取全部
    ];
    $result = $RongSDK->Sensitive()->getList($sensitive);
    Utils::dump("获取敏感词列表",$result);
}
getList();