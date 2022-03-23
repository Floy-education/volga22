<?php

namespace App\Service\Utils;

class ArrayUtils
{
    /**
     * @param string $key
     * @param string $string
     * @param string $delimiter
     * @return array|null
     */
    public function parseString(string $key, string $string, string $delimiter = '-'): ?array
    {
        return [$key => explode($delimiter, $string)];
    }
}