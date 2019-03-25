<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 8:55 AM
 */

namespace Pluto\Rpc\Protocol\Message\Internal;

/**
 * 消息
 * Class Message
 * @package Pluto\Rpc\Protocol\Field
 */
abstract class Message
{
    /**
     * 未知类型
     */
    const MESSAGE_TYPE_UNKNOWN = 'unknown';
    /**
     *  协议
     */
    const MESSAGE_TYPE_PROTOCOL = 'protocol';
    /**
     * RPC 协议
     */
    const MESSAGE_TYPE_RPC = 'rpc';
    /**
     * RPC 错误代码
     */
    const MESSAGE_TYPE_RPC_ERROR_CODE = 'rpc_error_code';
    /**
     * Object 对象
     */
    const MESSAGE_TYPE_OBJECT = 'object';
    /**
     * Parameter 参数
     */
    const MESSAGE_TYPE_PARAMETER = 'parameter';

    /**
     * @var string
     */
    protected $messageType = self::MESSAGE_TYPE_UNKNOWN;

    /**
     * @return string
     */
    public function getMessageType(): string
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     */
    public function setMessageType(string $messageType): void
    {
        $this->messageType = $messageType;
    }

    /**
     * @var array
     */
    protected $originData = [];

    /**
     * @param array $arr
     * @return $this
     */
    public function fromArray(array $arr)
    {
        $this->originData = $arr;
        return $this;
    }

    /**
     * @param $key
     * @param null $default
     * @return mixed|null
     */
    protected function getOriginData($key, $default = null)
    {
        return $this->originData[$key] ?? $default;
    }

    /**
     * @param $key
     * @param $value
     */
    protected function setObjectData($key, $value)
    {
        $this->originData[$key] = $value;
    }
}