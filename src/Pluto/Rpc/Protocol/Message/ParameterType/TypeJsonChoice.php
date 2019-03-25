<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:31 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeJsonChoice
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeJsonChoice extends TypeBase
{
    protected $type = "json_choice";
    protected $phpType = self::PHP_TYPE_STRING;
    protected $typeCheckFunction = "typeCheckJsonArrayChoice({{ value }}, {{ choices }}, {{ nullEnable }})";
}