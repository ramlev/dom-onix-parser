<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList164;

class RelatedWork
{

    /**
     * WorkRelationCode
     *
     * @var CodeList164
     */
    protected $WorkRelationCode;

    /**
     * Array of WorkIdentifiers
     *
     * @var WorkIdentifier[]
     */
    protected $WorkIdentifier = [];

    /**
     * Set WorkRelationCode
     *
     * @param CodeList164 $WorkRelationCode
     * @return void
     */
    public function setWorkRelationCode(CodeList164 $WorkRelationCode)
    {
        $this->WorkRelationCode = $WorkRelationCode;
    }

    /**
     * Add a new WorkIdentifier
     *
     * @param WorkIdentifier $WorkIdentifier
     * @return void
     */
    public function addWorkIdentifier(WorkIdentifier $WorkIdentifier)
    {
        $this->WorkIdentifier[] = $WorkIdentifier;
    }

    /**
     * Get WorkRelationCode
     *
     * @return CodeList164
     */
    public function getWorkRelationCode()
    {
        return $this->WorkRelationCode;
    }

    /**
     * WorkIdentifier
     *
     * @return WorkIdentifier[]
     */
    public function getWorkIdentifier()
    {
        return $this->WorkIdentifier;
    }

     /**
     * Remove WorkIdentifier
     *
     * @param WorkIdentifier $WorkIdentifier
     * @return void
     */
    public function removeWorkIdentifier(WorkIdentifier $WorkIdentifier)
    {
    }

}