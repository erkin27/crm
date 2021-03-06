<?php

namespace Engine;

use Engine\Core\Router\Router;
use Engine\DI\DI;
use Engine\Helper\CommonHelper;

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
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/1', 'ProductController:index');

        $routerDispatch = $this->router->dispatch(CommonHelper::getMethod(), CommonHelper::getPathUrl());

        list($class, $action) = explode(':', $routerDispatch->getController(), 2);

        $controller = '\\Cms\\Controller\\' . $class;

        call_user_func_array([new $controller($this->di), $action], $routerDispatch->getParameters());
    }
}