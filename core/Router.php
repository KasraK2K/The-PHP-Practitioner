<?php


class Router

{
    protected $routes = [];

    public static function load($file)

    {
        $router = new static;

        require $file;

        return $router;
    }


    public function define($routes)

    {
        $this->routes = $routes; // faghat dare arayei az route haro migire ta betoone toosh search kone
    }


    public function direct($uri)

    {
        if ( array_key_exists($uri, $this->routes) ) {
            return $this->routes[$uri]; // migarde age to araye key($uri) vojood dash meghdaresho return kone
        }

        throw new Exception('No route defined for this URI.');
    }
}