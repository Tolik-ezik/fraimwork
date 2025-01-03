<?php

class Router{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route){
        self::$routes[$regexp] = $route;
    }

    public static function getRouts(){
        return self::$routes;
    }

    public static function getRout(){
        return self::$route;
    }

    public static function matchRouter($url){
        foreach(self::$routes as $pattern => $route){
            if(preg_match("#$pattern#i", $url, $matches)){
                debug($matches);
                self::$route = $route;
                return true;
            }
        }return false;
    }
}