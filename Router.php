<?php
declare(strict_types=1);

class Router {
    private array $routes = [];
    
    public function add(string $path, Closure $handler): void {
        $this->routes[$path] = $handler;
    }

    public function dispatch(string $path): void {
        
        foreach ($this->routes as $route => $handler) {
            $patter = preg_replace("#\{\w+\}#", "([^\/]+)", $route);

            if ( preg_match("#^$pattern$#", $path, $matches)) {
                
                array_shift($matches);
                call_user_func_array($handler, $matches);

                return;
            }
        }
        header('Location: 404.php');
    }
}