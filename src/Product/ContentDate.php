<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList155;
use Dso\Onix\Date;

class ContentDate
{

    /**
     * ContentDateRole
     *
     * @var CodeList155
     */
    protected $ContentDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set ContentDateRole
     *
     * @param CodeList155 $ContentDateRole
     * @return void
     */
    public function setContentDateRole(CodeList155 $ContentDateRole)
    {
        $this->ContentDateRole = $ContentDateRole;
    }

    /**
     * Set Date
     *
     * @param Date $Date
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get ContentDateRole
     *
     * @return CodeList155
     */
    public function getContentDateRole()
    {
        return $this->ContentDateRole;
    }

    /**
     * Get Date
     *
     * @return Date
     */
    public function getDate()
    {
        return $this->Date;
    }

}