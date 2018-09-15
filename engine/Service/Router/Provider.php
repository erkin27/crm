<?php
namespace Engine\Service\Router;

use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;


class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';


    public function init()
    {
        $router = new Router('http://localhost');

        $this->di->set($this->serviceName, $router);
    }
}