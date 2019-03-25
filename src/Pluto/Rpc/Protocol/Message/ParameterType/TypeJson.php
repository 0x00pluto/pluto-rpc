<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:30 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeJson
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeJson extends TypeBase
{
    protected $type = "json";
    protected $phpType = self::PHP_TYPE_STRING;
    protected $typeCheckFunction = "typeCheckJsonString({{ value }}, {{ nullEnable }})";
}