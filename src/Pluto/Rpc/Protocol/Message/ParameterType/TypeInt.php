<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:21 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeInt
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeInt extends TypeBase
{
    protected $type = self::PHP_TYPE_INT;
    protected $phpType = self::PHP_TYPE_INT;
    protected $typeCheckFunction = "typeCheckNumber({{ value }}, {{ max }}, {{ min }}, {{ nullEnable }})";
}