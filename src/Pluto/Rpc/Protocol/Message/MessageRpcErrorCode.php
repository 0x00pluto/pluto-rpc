<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 10:47 AM
 */

namespace Pluto\Rpc\Protocol\Message;


use Pluto\Rpc\Protocol\Message\Internal\Message;

/**
 * Class MessageRpcErrorCode
 * @package Pluto\Rpc\Protocol\Message
 */
class MessageRpcErrorCode extends Message
{
    protected $messageType = self::MESSAGE_TYPE_RPC_ERROR_CODE;


//- { name: CELLPHONE_NOT_EXISTS, code: 100, comment: "用户手机号不存在" }
    protected $name;
    protected $code;
    protected $comment;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function fromArray(array $arr)
    {
        parent::fromArray($arr);


        $this->name = $this->getOriginData('name');
        $this->code = $this->getOriginData('code', $this->name);
        $this->comment = $this->getOriginData('comment');

        return $this;

    }


}