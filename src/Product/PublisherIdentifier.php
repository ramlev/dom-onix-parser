<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList44;

class PublisherIdentifier
{

    /**
     * PublisherIDType
     *
     * @var CodeList44
     */
    protected $PublisherIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set PublisherIDType
     *
     * @param CodeList44 $PublisherIDType
     * @return void
     */
    public function setPublisherIDType(CodeList44 $PublisherIDType)
    {
        $this->PublisherIDType = $PublisherIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $IDValue
     * @return void
     */
    public function setIDValue(string $IDValue)
    {
        $this->IDValue = $IDValue;
    }

    /**
     * Get PublisherIDType
     *
     * @return CodeList44
     */
    public function getPublisherIDType()
    {
        return $this->PublisherIDType;
    }

    /**
     * Get IDValue
     *
     * @return string
     */
    public function getIDValue()
    {
        $this->IDValue = $IDValue;
    }

}