<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList22;
use Dso\Onix\CodeList\CodeList74;

class Language
{

    /**
     * LanguageRole
     *
     * @var CodeList22
     */
    protected $LanguageRole;

    /**
     * LanguageCode
     *
     * @var CodeList74
     */
    protected $LanguageCode;

    /**
     * Set LanguageRole
     *
     * @param CodeList22 $LanguageRole
     * @return void
     */
    public function setLanguageRole(CodeList22 $LanguageRole)
    {
        $this->LanguageRole = $LanguageRole;
    }

    /**
     * Set LanguageCode
     *
     * @param CodeList74 $LanguageCode
     * @return void
     */
    public function setLanguageCode(CodeList74 $LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
    }

    /**
     * Get LanguageRole
     *
     * @return CodeList22
     */
    public function getLanguageRole()
    {
        return $this->LanguageRole;
    }

    /**
     * Get LanguageCode
     *
     * @return CodeList74
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

}
