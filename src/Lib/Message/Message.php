<?php
/**
 * 消息模块
 */
namespace RongCloud\Lib\Message;

use RongCloud\Lib\Message\{Chatroom\Chatroom,Discussion\Discussion,Group\Group,History\History,Person\Person,System\System};


class Message
{

    /**
     * 创建聊天室对象
     *
     * @return Chatroom
     */
    public function Chatroom(){
        return new Chatroom();
    }

    /**
     * 创建聊天室对象
     *
     * @return Discussion
     */
    public function Discussion(){
        return new Discussion();
    }

    /**
     * 创建聊天室对象
     *
     * @return Group
     */
    public function Group(){
        return new Group();
    }

    /**
     * 创建聊天室对象
     *
     * @return History
     */
    public function History(){
        return new History();
    }


    /**
     * 创建聊天室对象
     *
     * @return Person
     */
    public function Person(){
        return new Person();
    }

    /**
     * 创建聊天室对象
     *
     * @return System
     */
    public function System(){
        return new System();
    }
}