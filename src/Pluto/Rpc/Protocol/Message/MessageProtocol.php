<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 9:04 AM
 */

namespace Pluto\Rpc\Protocol\Message;


use Pluto\Rpc\Protocol\Message\Internal\Message;

/**
 * Class MessageProtocol
 * @package Pluto\Rpc\Protocol\Message
 */
class MessageProtocol extends Message
{

    const YAML_TYPE_RPC = 'rpc';
    const YAML_TYPE_OBJECT = 'object';

    protected $messageType = self::MESSAGE_TYPE_PROTOCOL;

    /**
     * @var string
     */
    protected $nameSpace;
    /**
     * @var string
     */
    protected $className;
    /**
     * @var string
     */
    protected $yamlType;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var bool
     */
    protected $deprecated;
    /**
     * @var array
     */
    protected $options;
    /**
     * @var string
     */
    protected $description;

    /**
     * @var MessageParameter []
     */
    protected $parameters = [];

    /**
     * @return string
     */
    public function getNameSpace(): string
    {
        return $this->nameSpace;
    }

    /**
     * @param string $nameSpace
     */
    public function setNameSpace(string $nameSpace)
    {
        $this->nameSpace = $nameSpace;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName(string $className)
    {
        $this->className = $className;
    }

    /**
     * @return string
     */
    public function getYamlType(): string
    {
        return $this->yamlType;
    }

    /**
     * @param string $yamlType
     */
    public function setYamlType(string $yamlType)
    {
        $this->yamlType = $yamlType;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version)
    {
        $this->version = $version;
    }

    /**
     * @return bool
     */
    public function isDeprecated(): bool
    {
        return $this->deprecated;
    }

    /**
     * @param bool $deprecated
     */
    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * 获取扩展项
     * @param $key
     * @param null $default
     * @return mixed|null
     */
    public function getOption($key, $default = null)
    {
        return $this->options[$key] ?? $default;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return MessageParameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param MessageParameter[] $parameters
     */
    public function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }


    public function fromArray(array $arr)
    {

        parent::fromArray($arr);

        $this->className = $arr['className'] ?? null;
        $this->yamlType = $arr['yamlType'] ?? self::YAML_TYPE_RPC;
        $this->version = $arr['version'] ?? 0;
        $this->deprecated = boolval($arr['deprecated'] ?? false);
        $this->options = $arr['options'] ?? [];
        $this->description = $arr['description'] ?? "";


        $parameters = $this->getOriginData('parameters', []);

        foreach ($parameters as $parameter) {
            $newParameter = new MessageParameter();
            $this->parameters[] = $newParameter->fromArray($parameter);
        }

//        dumpLine($parameters);

        return $this;

    }

    public function checkError()
    {

    }
}