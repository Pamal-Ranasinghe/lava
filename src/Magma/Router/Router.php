<?php 

declare(strict_types=1);

namespace Magma\Router;

use Magma\Router\RouterInterface;

class Router implements RouterInterface {

    /**
     * return an array of route from our routing table
     * @var array
     */
    protected array $routes = [];

    /**
     * return an array of route parameters
     * @var array
     */
    protected array $params = [];

    /**
     * Add a suffix onto the controller name
     * @var string
     */
    protected string $controllerSuffix = 'controller';

    /**
     * @inheritDoc
     */
    public function add(string $route, array $params): void {
        $this->routes[$route] = $params;
    }

    /**
     * @inheritDoc
     */
    public function dispatch(string $url): void {
        
    }
}  