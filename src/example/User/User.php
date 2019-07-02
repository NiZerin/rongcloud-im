<?php
/**
 * 用户模块 用户实例
 */


define("APPKEY", '');
define('APPSECRET','');
use RongCloud\Entrance;
use RongCloud\Lib\Utils;

/**
 * 用户注册
 */
function register()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $user = [
        'id'=> 'ujadk90had',
        'name'=> 'Maritn',//用户名称
        'portrait'=> 'http://7xogjk.com1.z0.glb.clouddn.com/IuDkFprSQ1493563384017406982' //用户头像
    ];
    $register = $RongSDK->User()->register($user);
    Utils::dump("用户注册",$register);
}
register();

/**
 * 用户信息更新
 */
function update()
{
    $RongSDK = new Entrance(APPKEY,APPSECRET);
    $user = [
        'id'=> 'ujadk90ha',//用户id
        'name'=> 'Maritn',//用户名称
        'portrait'=> 'http://7xogjk.com1.z0.glb.clouddn.com/IuDkFprSQ1493563384017406982' //用户头像
    ];
    $update = $RongSDK->User()->update($user);
    Utils::dump("用户信息更新",$update);
}
update();
