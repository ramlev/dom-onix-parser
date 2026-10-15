<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList163;
use Dso\Onix\Date;

class MarketDate
{

    /**
     * MarketDateRole
     *
     * @var CodeList163
     */
    protected $MarketDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set MarketDateRole
     *
     * @param CodeList163 $MarketDateRole
     * @return void
     */
    public function setMarketDateRole(CodeList163 $MarketDateRole)
    {
        $this->MarketDateRole = $MarketDateRole;
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
     * Get MarketDateRole
     *
     * @return CodeList163
     */
    public function getMarketDateRole()
    {
        return $this->MarketDateRole;
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