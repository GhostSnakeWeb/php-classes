<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.08.2019
 * Time: 15:34
 */

namespace classes;

class Tag
{
    private $resultMas;
    private static $ignoredTags = array(
        'br', 'hr', 'img',
        'area', 'base', 'basefont',
        'bgsound', 'col', 'command',
        'embed', 'input', 'isindex',
        'keygen', 'link', 'meta',
        'param', 'source', 'track', 'wbr'
    );

    public function __construct($typeTag)
    {
        $this->resultMas['typeTag'] = $typeTag;
    }

    public function setText($textValue)
    {
        $this->resultMas['textValue'] = $textValue;
        return $this;
    }

    public function setAttr($attr, $attrVal)
    {
        $this->resultMas['attributes'][$attr] = $attrVal;
        return $this;
    }

    public function show()
    {
        $tagAttributes = '';
        if (isset($this->resultMas["attributes"])) {
            foreach ($this->resultMas["attributes"] as $attr => $value) {
                $tagAttributes .= "$attr = '$value' ";
            }
        }
        $resultTag = "<".$this->resultMas["typeTag"]." $tagAttributes>".$this->resultMas["textValue"];
        foreach (self::$ignoredTags as $tag) {
            if($this->resultMas["typeTag"] !== $tag){
                $resultTag .= "</".$this->resultMas["typeTag"].">";
            }
        }
        echo $resultTag;
    }
}