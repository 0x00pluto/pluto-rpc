<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 9:23 AM
 */

namespace Pluto\Rpc\Protocol\Parser;

use Pluto\Rpc\Protocol\Message\MessageObject;
use Pluto\Rpc\Protocol\Message\MessageProtocol;
use Pluto\Rpc\Protocol\Message\MessageRpc;
use Symfony\Component\Yaml\Yaml;

/**
 * Class Parser
 * @package Pluto\Rpc\Protocol\Parser
 */
class Parser
{
    /**
     * @param $yamlString
     * @return MessageProtocol
     */
    public function parser($yamlString)
    {
        $contents = Yaml::parse($yamlString);

//        dumpLine($contents);

        $messageProtocol = new MessageProtocol();
        $messageProtocol->fromArray($contents);

        switch ($messageProtocol->getYamlType()) {
            case MessageProtocol::MESSAGE_TYPE_RPC:
                $messageProtocol = new MessageRpc();
                $messageProtocol->fromArray($contents);
                break;

            case MessageProtocol::MESSAGE_TYPE_OBJECT:
                $messageProtocol = new MessageObject();
                $messageProtocol->fromArray($contents);
                break;
        }

//        dumpLine($messageProtocol);

        return $messageProtocol;
    }
}