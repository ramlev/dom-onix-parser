<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList93;

class Supplier
{

    /**
     * SupplierRole
     *
     * @var CodeList93
     */
    protected $SupplierRole;

    /**
     * Array of SupplierIdentifiers
     *
     * @var SupplierIdentifier[]
     */
    protected $SupplierIdentifier = [];

    /**
     * SupplierName
     *
     * @var string
     */
    protected $SupplierName;

    /**
     * TelephoneNumber
     *
     * @var string
     */
    protected $TelephoneNumber;

    /**
     * Set SupplierRole
     *
     * @param CodeList93 $SupplierRole
     * @return void
     */
    public function setSupplierRole(CodeList93 $SupplierRole)
    {
        $this->SupplierRole = $SupplierRole;
    }

    /**
     * Set SupplierIdentifier
     *
     * @param SupplierIdentifier $SupplierIdentifier
     * @return void
     */
    public function addSupplierIdentifier(SupplierIdentifier $SupplierIdentifier)
    {
        $this->SupplierIdentifier[] = $SupplierIdentifier;
    }

    /**
     * Set SupplierName
     *
     * @param string $SupplierName
     * @return void
     */
    public function setSupplierName(string $SupplierName)
    {
        $this->SupplierName = $SupplierName;
    }

    /**
     * Set TelephoneNumber
     *
     * @param string $TelephoneNumber
     * @return void
     */
    public function setTelephoneNumber(string $TelephoneNumber)
    {
        $this->TelephoneNumber = $TelephoneNumber;
    }

    /**
     * Get SupplierRole
     *
     * @return CodeList93
     */
    public function getSupplierRole()
    {
        return $this->SupplierRole;
    }

    /**
     * Get SupplierIdentifiers
     *
     * @return SupplierIdentifier[]
     */
    public function getSupplierIdentifier()
    {
        return $this->SupplierIdentifier;
    }

    /**
     * Get SupplierName
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }

    /**
     * Get TelephoneNumber
     *
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->TelephoneNumber;
    }

    public function removeSupplierIdentifier(SupplierIdentifier $SupplierIdentifier)
    {
    }

}