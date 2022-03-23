<?php

namespace App\Serializer;
use ArrayObject;
use Countable;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Serializer;

class ClientSerializer
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function serialize($items): Response
    {
        $data = [
            'success' => true,
            'items' => $items
        ];

        $response = new JsonResponse;

        $response->setContent($this->serializer->serialize($data, 'json'));

        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

    /**
     * @param $items
     * @return array|ArrayObject|bool|Countable|float|int|mixed|string|null
     * @throws ExceptionInterface
     */
    public function normalize($items)
    {
        return $this->serializer->normalize($items);
    }
}