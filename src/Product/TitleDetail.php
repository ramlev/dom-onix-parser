<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList15;

class TitleDetail
{

    /**
     * TitleType
     *
     * @var CodeList15
     */
    protected $TitleType;

    /**
     * Array of TitleElement
     *
     * @var TitleElement[]
     */
    protected $TitleElement = [];

    /**
     * Set TitleType
     *
     * @param CodeList15 $TitleType
     * @return void
     */
    public function setTitleType(CodeList15 $TitleType)
    {
        $this->TitleType = $TitleType;
    }

    /**
     * Add TitleElement
     *
     * @param TitleElement $TitleElement
     * @return void
     */
    public function addTitleElement(TitleElement $TitleElement)
    {
        $this->TitleElement[] = $TitleElement;
    }

    /**
     * Remove TitleElement
     *
     * @param TitleElement $TitleElement
     * @return void
     */
    public function removeTitleElement(TitleElement $TitleElement)
    {
    }

    /**
     * Get TitleType
     *
     * @return CodeList15
     */
    public function getTitleType()
    {
        return $this->TitleType;
    }

    /**
     * Get TitleElements
     *
     * @return TitleElement[]
     */
    public function getTitleElement()
    {
        return $this->TitleElement;
    }

}