<?php

namespace Dso\Onix\Normalizer;

use Dso\Onix\Date;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DateNormalizer implements NormalizerInterface, DenormalizerInterface
{

    public function getSupportedTypes(?string $format): array
    {
        return [Date::class => true];
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Date;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return $object->formatOnix();
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === Date::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        return Date::parse(
            is_array($data) ? $data['#'] : $data,
            is_array($data) ? $data['@dateformat'] : '00'
        );
    }

}
