<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:22 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeBool
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeBool extends TypeBase
{
    protected $type = self::PHP_TYPE_BOOL;
    protected $phpType = self::PHP_TYPE_BOOL;
    protected $typeCheckFunction = "typeCheckBool({{ value }}, {{ max }}, {{ min }}, {{ nullEnable }})";
}