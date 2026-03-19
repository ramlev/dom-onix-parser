<?php

namespace Dso\Onix\Normalizer;

use Dso\Onix\Text;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TextNormalizer implements NormalizerInterface, DenormalizerInterface
{

    public function getSupportedTypes(?string $format): array
    {
        return [Text::class => true];
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Text;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return (string) $object;
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === Text::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $textFormat = $data['@textformat'] ?? Text::TYPE_DEFAULT;
        $language = $data['@language'] ?? null;
        $content = is_array($data) ? ($data['#'] ?? '') : $data;

        return new Text((string) $content, $textFormat, $language);
    }

}
