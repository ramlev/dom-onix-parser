<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList145;
use Dso\Onix\CodeList\CodeList146;

class EpubUsageConstraint
{
    protected ?CodeList145 $EpubUsageType = null;

    protected ?CodeList146 $EpubUsageStatus = null;

    /**
     * EpubUsageLimit
     *
     * @var EpubUsageLimit[]
     */
    protected array $EpubUsageLimit = [];

    public function setEpubUsageType(CodeList145 $EpubUsageType): void
    {
        $this->EpubUsageType = $EpubUsageType;
    }

    public function setEpubUsageStatus(CodeList146 $EpubUsageStatus): void
    {
        $this->EpubUsageStatus = $EpubUsageStatus;
    }

    public function addEpubUsageLimit(EpubUsageLimit $EpubUsageLimit): void
    {
        $this->EpubUsageLimit[] = $EpubUsageLimit;
    }

    public function removeEpubUsageLimit(EpubUsageLimit $EpubUsageLimit): void
    {
    }

    public function getEpubUsageType(): ?CodeList145
    {
        return $this->EpubUsageType;
    }

    public function getEpubUsageStatus(): ?CodeList146
    {
        return $this->EpubUsageStatus;
    }

    /**
     * @return EpubUsageLimit[]
     */
    public function getEpubUsageLimit(): array
    {
        return $this->EpubUsageLimit;
    }
}
