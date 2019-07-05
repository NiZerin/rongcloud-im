<?php
/**
 * 融云 server sdk
 */

namespace RongCloud;

use RongCloud\lib\Chatroom\Chatroom;
use RongCloud\lib\Conversation\Conversation;
use RongCloud\lib\Group\Group;
use RongCloud\lib\Message\Message;
use RongCloud\lib\Sensitive\Sensitive;
use RongCloud\lib\User\User;


/**
 * 入口类
 * Class Entrance
 * @package RongCloud
 */
class Entrance
{
    /**
     * 应用 appkey
     *
     * @var string
     */
    public static $appkey;

    /**
     * 应用 appSecret
     *
     * @var string
     */
    public static $appSecret;

    /**
     * 海外数据中心 api 地址 ，默认为国内数据中心
     *
     * @var string
     */
    public static $apiUrl;

    /**
     * 用户对象
     *
     * @var  User
     */
    public $_user;

    /**
     * 消息对象
     *
     * @var Message
     */
    public $_message;

    /**
     * 群组对象
     *
     * @var Group
     */
    public $_group;

    /**
     * 会话对象
     *
     * @var Conversation
     */
    public $_conversation;

    /**
     * 聊天室对象
     *
     * @var Chatroom
     */
    public $_chatroom;

    /**
     * 敏感词对象
     *
     * @var Sensitive
     */
    public $_sensitive;

    /**
     * RongCloud constructor.
     * @param  string  $appKey  实体 appKey 应用 key
     * @param  string  $appSecret  实体 appSecret 应用 秘钥
     * @param  string  $apiUrl
     */
    public function __construct($appKey = "", $appSecret = "", $apiUrl = "")
    {
        //设置 key 和秘钥
        if ($appKey) {
            self::$appkey = $appKey;
            self::$appSecret = $appSecret;
        }
        if ($apiUrl) {
            self::$apiUrl = $apiUrl;
        }
        //创建 User
        $this->_user = new User();

        //创建 Group
        $this->_group = new Group();

        //创建 Chatroom
        $this->_chatroom = new Chatroom();

        //创建 Conversation
        $this->_conversation = new Conversation();

        //创建 Message
        $this->_message = new Message();

        //创建 Sensitive
        $this->_sensitive = new Sensitive();
    }

    /**
     * 获取用户对象
     *
     * @return User
     */
    public function User()
    {
        return $this->_user;
    }

    /**
     * 获取消息对象
     *
     * @return Message
     */
    public function Message()
    {
        return $this->_message;
    }

    /**
     * 获取群组对象
     *
     * @return Group
     */
    public function Group()
    {
        return $this->_group;
    }

    /**
     * 获取聊天室对象
     *
     * @return Chatroom
     */
    public function ChatRoom()
    {
        return $this->_chatroom;
    }

    /**
     * 获取会话对象
     *
     * @return Conversation
     */
    public function Conversation()
    {
        return $this->_conversation;
    }

    /**
     * 获取敏感词对象
     *
     * @return Sensitive
     */
    public function Sensitive()
    {
        return $this->_sensitive;
    }
}