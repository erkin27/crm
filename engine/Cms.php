<?php

namespace Engine;

use Engine\Core\Router\Router;
use Engine\DI\DI;

class Cms
{
    /**
     * @var $di DI
     */
    private $di;

    /**
     * @var $router Router
     */
    public $router;

    /**
     * Cms constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    public function run()
    {
        echo  'Hello CMS!' . PHP_EOL;

        print_r($this->di);
    }
}