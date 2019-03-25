<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 11:13 AM
 */

namespace Pluto\Rpc\Protocol\Message\ParameterType;

/**
 * Class TypeBase
 * @package Pluto\Rpc\Protocol\Message\ParameterType
 */
abstract class TypeBase
{

    const PHP_TYPE_STRING = "string";
    const PHP_TYPE_INT = "int";
    const PHP_TYPE_FLOAT = "float";
    const PHP_TYPE_BOOL = "bool";
    const PHP_TYPE_UNKNOWN = "unknown";
    /**
     * @var string 类型名称
     */
    protected $type;

    /**
     * @var
     */
    protected $phpType = self::PHP_TYPE_STRING;

    /**
     * @var string 类型检测函数
     */
    protected $typeCheckFunction;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPhpType()
    {
        return $this->phpType;
    }

    /**
     * @param mixed $phpType
     */
    public function setPhpType($phpType): void
    {
        $this->phpType = $phpType;
    }

    /**
     * @return string
     */
    public function getTypeCheckFunction(): string
    {
        return $this->typeCheckFunction;
    }

    /**
     * @param string $typeCheckFunction
     */
    public function setTypeCheckFunction(string $typeCheckFunction): void
    {
        $this->typeCheckFunction = $typeCheckFunction;
    }


}