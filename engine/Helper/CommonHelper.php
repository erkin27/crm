<?php

namespace Engine\Helper;

class CommonHelper
{
    /**
     * @return bool
     */
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    /**
     * @return mixed
     */
    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return bool|string
     */
    public static function getPathUrl()
    {
        $pathUrl = $_SERVER['REQUEST_URI'];

        if ($position = strpos($pathUrl, '?')) {

            $pathUrl = substr($pathUrl, 0, $position);
        }

        return $pathUrl;
    }
}