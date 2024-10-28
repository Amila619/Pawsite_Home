
<?php
class Router {
    private $routes = [];

    public function define($routes) {
        $this->routes = $routes;
    }

    public function direct($uri) {
        $uri = trim(parse_url($uri, PHP_URL_PATH), '/');
        $subfolder = 'Pawsitive_Home';
        
        if (strpos($uri, $subfolder) === 0) {
            $uri = substr($uri, strlen($subfolder));
            $uri = trim($uri, '/');
        }

        foreach ($this->routes as $pattern => $controller) {
            // Update the pattern to match alphanumeric strings with underscores
            $pattern = preg_replace('/\{[a-zA-Z]+\}/', '([a-zA-Z0-9_]+)', $pattern);
            $pattern = str_replace('/', '\/', $pattern);
            
            if (preg_match("/^{$pattern}$/", $uri, $matches)) {
                array_shift($matches);
                return $this->callAction($controller, $matches);
            }
        }

        return $this->callAction($this->routes['404']);
    }

    protected function callAction($controller, $params = []) {
        require $controller;
    }
}

// Example usage
require 'functions.php';

$router = new Router();

$router->define([
    '' => 'controllers/index.php',
    '404' => 'controllers/404.php',
    'signup' => 'controllers/signup.php',
    'pet/{id}' => 'controllers/pet.php',
]);

$uri = $_SERVER['REQUEST_URI'];
$router->direct($uri);
