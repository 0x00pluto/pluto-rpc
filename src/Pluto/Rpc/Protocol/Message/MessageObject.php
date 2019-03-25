<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 10:38 AM
 */

namespace Pluto\Rpc\Protocol\Message;


class MessageObject extends MessageProtocol
{
    protected $messageType = self::MESSAGE_TYPE_OBJECT;


    protected $extends = null;

    /**
     * @return null
     */
    public function getExtends()
    {
        return $this->extends;
    }

    public function fromArray(array $arr)
    {
        parent::fromArray($arr);

        $this->extends = $this->getOriginData('extends');

        return $this;

    }


}