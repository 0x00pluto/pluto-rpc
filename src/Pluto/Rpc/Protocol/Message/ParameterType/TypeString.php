<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:15 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeString
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeString extends TypeBase
{
    protected $type = self::PHP_TYPE_STRING;
    protected $phpType = self::PHP_TYPE_STRING;
    protected $typeCheckFunction = "typeCheckString({{ value }}, {{ max }}, {{ min }}, {{ nullEnable }})";
}