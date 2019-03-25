<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 10:04 AM
 */

namespace Pluto\Rpc\Protocol\Message;


use Pluto\Rpc\Protocol\Message\Internal\Message;

/**
 * Class MessageParameter
 * @package Pluto\Rpc\Protocol\Message
 */
class MessageParameter extends Message
{
    protected $messageType = self::MESSAGE_TYPE_PARAMETER;

    protected $name = null;
    protected $type = null;
    protected $min = null;
    protected $max = null;
    protected $choice = null;
    protected $default = null;
    protected $require = true;
    protected $comment = null;
    protected $repeated = false;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param string $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param string $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return array
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * @param array $choice
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    /**
     * 是否有默认值
     * @return bool
     */
    public function hasDefault()
    {
        return !is_null($this->default);
    }

    /**
     * @return string|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * @return boolean
     */
    public function isRequire()
    {
        return $this->require;
    }

    /**
     * @param boolean $require
     */
    public function setRequire($require)
    {
        $this->require = boolval($require);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return bool
     */
    public function isRepeated(): bool
    {
        return $this->repeated;
    }

    protected const OBJ_PREFIX = "obj.";

    /**
     * @return bool
     */
    public function isObject()
    {
        return starts_with($this->getType(), self::OBJ_PREFIX);
    }


    /**
     * 填充数据
     * @param array $arr
     * @return $this|Message
     */
    public function fromArray($arr)
    {
        $this->originData = [];
        foreach ($arr as $key => $value) {
            if (empty(trim($key))) {
//                throw new RpcGenerateParserError('有字段名为空');
            }
            $this->originData[trim($key)] = $value;
        }

        $this->name = $this->getOriginData('name');
        $this->type = $this->getOriginData('type');
        $this->min = $this->getOriginData('min');
        $this->max = $this->getOriginData('max');
        $this->choice = $this->getOriginData('choice');
        $this->default = $this->getOriginData('default');
        $this->require = $this->getOriginData('require', false);
        $this->comment = $this->getOriginData('comment');
        $this->repeated = boolval($this->getOriginData('repeated', false));

        return $this;
    }

    /**
     * 检测参数错误
     */
    public function checkError()
    {
//        if (is_null($this->name)) {
//            $this->error("字段缺少name");
//        }
//        if (is_null($this->type)) {
//            $this->error("字段{$this->name}:缺少type");
//        }
    }


}