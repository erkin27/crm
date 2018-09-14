<?php

namespace Engine;

use Engine\DI\DI;

class Cms
{
    /**
     * @var $di DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    public function run()
    {
        echo  'Hello CMS!';
    }
}