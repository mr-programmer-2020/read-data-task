<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
    
        $uri = $this->getURI();

        // Check for such a request in routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {
                
                // Get the inner path from the outer one according to the rule.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                                
                // Define controller, action, parameters
                $segments = explode('/', $internalRoute);
                
                $controllerName = ucfirst(array_shift($segments)).'Controller';
                $actionName = 'action'.ucfirst(array_shift($segments));
                             
                $parameters = $segments;
                
                // Include controller class file
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Create an object.
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName),  $parameters);

                
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
