<?php

namespace App\Service\Utils;

class DataUtils
{
    /**
     * @param array $data
     * @return array
     */
    public function prepareData(array $data): array
    {
        unset($data['price']);

        return $data;
    }
}