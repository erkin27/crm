<?php

namespace Engine;

use Engine\DI\DI;

abstract class Controller
{
    /**
     * @var $di DI
     */
    protected $di;

    /**
     * Controller constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }
}