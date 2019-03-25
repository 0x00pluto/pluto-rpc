<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 10:38 AM
 */

namespace Pluto\Rpc\Protocol\Message;


class MessageRpc extends MessageProtocol
{
    protected $messageType = self::MESSAGE_TYPE_RPC;
    /**
     * @var MessageParameter []
     */
    protected $returnParameters = [];

    /**
     * @return MessageParameter[]
     */
    public function getReturnParameters(): array
    {
        return $this->returnParameters;
    }

    /**
     * @var MessageRpcErrorCode []
     */
    protected $errorCodes = [];

    /**
     * @return MessageRpcErrorCode[]
     */
    public function getErrorCodes(): array
    {
        return $this->errorCodes;
    }


    public function fromArray(array $arr)
    {
        parent::fromArray($arr);


        $this->returnParameters = [];
        $returnParameters = $this->getOriginData('returnParameters', []);
        foreach ($returnParameters as $parameter) {
            $newParameter = new MessageParameter();
            $this->returnParameters[] = $newParameter->fromArray($parameter);
        }

        $this->errorCodes = [];
        $errorCodes = $this->getOriginData('errorCodes', []);
        foreach ($errorCodes as $errorCode) {
            $newErrorCode = new MessageRpcErrorCode();
            $this->errorCodes[] = $newErrorCode->fromArray($errorCode);
        }

        return $this;
    }


}