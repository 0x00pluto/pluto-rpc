<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:23 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeFloat
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeFloat extends TypeBase
{
    protected $type = self::PHP_TYPE_FLOAT;
    protected $phpType = self::PHP_TYPE_FLOAT;
    protected $typeCheckFunction = "typeCheckFloat({{ value }}, {{ max }}, {{ min }}, {{ nullEnable }})";
}