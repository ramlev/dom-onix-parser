<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList23;
use Dso\Onix\CodeList\CodeList24;

class Extent
{

    /**
     * ExtentType
     *
     * @var CodeList23
     */
    protected $ExtentType;

    /**
     * ExtentValue
     *
     * @var string
     */
    protected $ExtentValue;

    /**
     * ExtentUnit
     *
     * @var CodeList24
     */
    protected $ExtentUnit;

    /**
     * Set ExtentType
     *
     * @param CodeList23 $ExtentType
     * @return void
     */
    public function setExtentType(CodeList23 $ExtentType)
    {
        $this->ExtentType = $ExtentType;
    }

    /**
     * Set ExtentValue
     *
     * @param string $ExtentValue
     * @return void
     */
    public function setExtentValue(string $ExtentValue)
    {
        $this->ExtentValue = $ExtentValue;
    }

    /**
     * Set ExtentUnit
     *
     * @param CodeList24 $ExtentUnit
     * @return void
     */
    public function setExtentUnit(CodeList24 $ExtentUnit)
    {
        $this->ExtentUnit = $ExtentUnit;
    }

    /**
     * Get ExtentType
     *
     * @return CodeList23
     */
    public function getExtentType()
    {
        return $this->ExtentType;
    }

    /**
     * Get ExtentValue
     *
     * @return string
     */
    public function getExtentValue()
    {
        return $this->ExtentValue;
    }

    /**
     * Get ExtentUnit
     *
     * @return CodeList24
     */
    public function getExtentUnit()
    {
        return $this->ExtentUnit;
    }

}
