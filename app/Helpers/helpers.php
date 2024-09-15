<?php

use Illuminate\Support\Str;

if (!function_exists('limitString')) {
    /**
     * Limit a string to a specified length and add ellipsis if necessary.
     *
     * @param string $str
     * @param int $limit
     * @param string $ending
     * @return string
     */
    function limitString($str, $limit = 50, $ending = '...')
    {
        return Str::limit($str, $limit, $ending);
    }
}
