<?php
/**
 * 用户模块 用户在线状态
 */


require "./../../Entrance.php";
define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use RongCloud\Lib\Utils;

/**
 * 在线状态
 */
function check()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $user = [
        'id'=> 'ujadk90hadsdfasdf',
    ];
    $register = $RongSDK->User()->Onlinestatus()->check($user);
    Utils::dump("用户注册",$register);
}
check();

