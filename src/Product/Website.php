<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList73;

class Website
{

    /**
     * WebsiteRole
     *
     * @var CodeList73
     */
    protected $WebsiteRole;

    /**
     * WebsiteLink
     *
     * @var string
     */
    protected $WebsiteLink;

    /**
     * Set WebsiteRole
     *
     * @param CodeList73 $WebsiteRole
     * @return void
     */
    public function setWebsiteRole(CodeList73 $WebsiteRole)
    {
        $this->WebsiteRole = $WebsiteRole;
    }

    /**
     * Set WebsiteLink
     *
     * @param string $WebsiteLink
     * @return void
     */
    public function setWebsiteLink(string $WebsiteLink)
    {
        $this->WebsiteLink = $WebsiteLink;
    }

    /**
     * Get WebsiteRole
     *
     * @return CodeList73
     */
    public function getWebsiteRole()
    {
        return $this->WebsiteRole;
    }

    /**
     * Get WebsiteLink
     *
     * @return string
     */
    public function getWebsiteLink()
    {
        return $this->WebsiteLink;
    }

}