<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:28 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeChoice
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
class TypeChoice extends TypeBase
{
    protected $type = 'choice';
    protected $phpType = self::PHP_TYPE_UNKNOWN;
    protected $typeCheckFunction = "typeCheckChoice({{ value }}, {{ choices }}, {{ nullEnable }})";
}