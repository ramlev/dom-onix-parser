<?php

namespace Dso\Onix\Normalizer;

use Dso\Onix\CodeList\CodeList;
use Dso\Onix\Exception\InvalidCodeListCodeException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CodeListNormalizer implements NormalizerInterface, DenormalizerInterface
{

	private string $language;

	public function __construct(string $language = 'en')
	{
		$this->language = $language;
	}

    public function getSupportedTypes(?string $format): array
    {
        return [CodeList::class => false];
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof CodeList;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return $object->getCode();
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return is_subclass_of($type, CodeList::class);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        try {
            return $type::resolve($data, $this->language);
        } catch (InvalidCodeListCodeException $e) {
            throw new NotNormalizableValueException($e->getMessage(), $e->getCode(), $e);
        }
    }

}
