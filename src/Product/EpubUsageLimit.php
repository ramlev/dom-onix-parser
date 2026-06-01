<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList147;

class EpubUsageLimit
{
    protected ?string $Quantity = null;

    protected ?CodeList147 $EpubUsageUnit = null;

    public function setQuantity(string $Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    public function setEpubUsageUnit(CodeList147 $EpubUsageUnit): void
    {
        $this->EpubUsageUnit = $EpubUsageUnit;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function getEpubUsageUnit(): ?CodeList147
    {
        return $this->EpubUsageUnit;
    }
}
