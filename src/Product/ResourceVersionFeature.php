<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList162;

class ResourceVersionFeature
{
    protected ?CodeList162 $ResourceVersionFeatureType = null;

    protected ?string $FeatureValue = null;

    public function setResourceVersionFeatureType(CodeList162 $ResourceVersionFeatureType): void
    {
        $this->ResourceVersionFeatureType = $ResourceVersionFeatureType;
    }

    public function setFeatureValue(string $FeatureValue): void
    {
        $this->FeatureValue = $FeatureValue;
    }

    public function getResourceVersionFeatureType(): ?CodeList162
    {
        return $this->ResourceVersionFeatureType;
    }

    public function getFeatureValue(): ?string
    {
        return $this->FeatureValue;
    }
}
