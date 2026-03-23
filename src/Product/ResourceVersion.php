<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList161;

class ResourceVersion
{
    private const FEATURE_HEIGHT   = '02';
    private const FEATURE_WIDTH    = '03';
    private const FEATURE_FILENAME = '04';
    private const FEATURE_SIZE_MB  = '05';
    private const FEATURE_MD5      = '06';
    private const FEATURE_SIZE_B   = '07';
    private const FEATURE_SHA256   = '08';

    protected ?CodeList161 $ResourceForm = null;

    protected ?string $ResourceLink = null;

    /** @var ResourceVersionFeature[] */
    protected array $ResourceVersionFeature = [];

    public function setResourceForm(CodeList161 $ResourceForm): void
    {
        $this->ResourceForm = $ResourceForm;
    }

    public function setResourceLink(string $ResourceLink): void
    {
        $this->ResourceLink = $ResourceLink;
    }

    public function addResourceVersionFeature(ResourceVersionFeature $ResourceVersionFeature): void
    {
        $this->ResourceVersionFeature[] = $ResourceVersionFeature;
    }

    public function removeResourceVersionFeature(ResourceVersionFeature $ResourceVersionFeature): void
    {
        $this->ResourceVersionFeature = array_values(
            array_filter($this->ResourceVersionFeature, fn ($f) => $f !== $ResourceVersionFeature)
        );
    }

    public function getResourceForm(): ?CodeList161
    {
        return $this->ResourceForm;
    }

    public function getResourceLink(): ?string
    {
        return $this->ResourceLink;
    }

    /** @return ResourceVersionFeature[] */
    public function getResourceVersionFeature(): array
    {
        return $this->ResourceVersionFeature;
    }

    /** @return ResourceVersionFeature[] */
    public function getResourceVersionFeatures(): array
    {
        return $this->ResourceVersionFeature;
    }

    public function hasLink(): bool
    {
        return $this->ResourceLink !== null;
    }

    private function getFeatureValue(string $typeCode): ?string
    {
        foreach ($this->ResourceVersionFeature as $feature) {
            if ($feature->getResourceVersionFeatureType()?->getCode() === $typeCode) {
                return $feature->getFeatureValue();
            }
        }

        return null;
    }

    public function getHeight(): ?int
    {
        $value = $this->getFeatureValue(self::FEATURE_HEIGHT);

        return $value !== null ? (int) $value : null;
    }

    public function getWidth(): ?int
    {
        $value = $this->getFeatureValue(self::FEATURE_WIDTH);

        return $value !== null ? (int) $value : null;
    }

    public function getFilename(): ?string
    {
        return $this->getFeatureValue(self::FEATURE_FILENAME);
    }

    public function getFileSizeMb(): ?float
    {
        $value = $this->getFeatureValue(self::FEATURE_SIZE_MB);

        return $value !== null ? (float) $value : null;
    }

    public function getMd5(): ?string
    {
        return $this->getFeatureValue(self::FEATURE_MD5);
    }

    public function getFileSizeBytes(): ?int
    {
        $value = $this->getFeatureValue(self::FEATURE_SIZE_B);

        return $value !== null ? (int) $value : null;
    }

    public function getSha256(): ?string
    {
        return $this->getFeatureValue(self::FEATURE_SHA256);
    }
}
