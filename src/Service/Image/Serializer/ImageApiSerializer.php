<?php

namespace App\Service\Image\Serializer;

use App\Serializer\ApiSerializer as AppSerializer;
use App\Service\Image\Normalizer\ImageApiNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class ImageApiSerializer extends AppSerializer
{
    public function __construct(ImageApiNormalizer $apiNormalizer)
    {
        parent::__construct(new Serializer([$apiNormalizer], [new JsonEncoder()]));
    }
}