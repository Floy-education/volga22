<?php

namespace App\Serializer;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Serializer;

class ApiSerializer
{
    public function __construct(protected Serializer $serializer){}

    public function serialize($items, array $more = []): Response
    {
        $data = [
            'success' => true,
            is_array($items) || $items instanceof PaginationInterface ? 'entities' : 'entity' => $items
        ];

        if ($items instanceof PaginationInterface) {

            $data['pagination'] = [
                'current_page' => $items->getCurrentPageNumber(),
                'last_page' => intval(ceil($items->getTotalItemCount() / $items->getItemNumberPerPage())),
                'total' => $items->getTotalItemCount()
            ];
        }

        if (!empty($more)) {

            $data = array_merge($data, $more);
        }

        $response = new JsonResponse;

        $response->setContent($this->serializer->serialize($data, 'json'));

        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

    /**
     * @param $items
     * @return array
     * @throws ExceptionInterface
     */
    public function normalize($items): array
    {
        return $this->serializer->normalize($items);
    }
}