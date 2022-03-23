<?php

namespace App\Service\Image\Normalizer;

use App\Entity\Image;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class ImageApiNormalizer implements ContextAwareNormalizerInterface
{
    /**
     * @param $object
     * @param string|null $format
     * @param array $context
     * @return array
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'id' => $object->getId(),
            'source' => $object->getSource(),
            'order' => $object->gerOrder(),
        ];
    }

    /**
     * @param mixed $data
     * @param string|null $format
     * @param array $context
     * @return bool
     */
    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return true;
        return $data instanceof Image;
    }
}