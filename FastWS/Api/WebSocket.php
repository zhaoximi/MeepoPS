<?php
/**
 * API - Telnet协议
 * Created by lixuan868686@163.com
 * User: lane
 * Date: 16/3/23
 * Time: 下午2:12
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
namespace FastWS\Api;

use FastWS\Core\FastWS;

class WebSocket extends FastWS
{

    //回调函数 - 接收到PING的时候
    public $callbackPing;
    //回调函数 - 接收到PONG的时候
    public $callbackPong;

    /**
     * Telnet constructor.
     * @param string $host string 需要监听的地址
     * @param string $port string 需要监听的端口
     * @param array $contextOptionList
     */
    public function __construct($host, $port, $contextOptionList = array())
    {
        if (!$host || !$port) {
            return;
        }
        parent::__construct('websocket', $host, $port, $contextOptionList);
    }

    /**
     * 运行一个Telnet实例
     */
    public function run()
    {
        parent::run();
    }
}
