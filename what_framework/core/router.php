<?php
namespace PhpFramework;

require_once __DIR__  .  "/../at.php";
compos();

use PhpFramework\Request;
use PhpFramework\Respons;

class Router{
    protected array $routes = [];
    protected array $routt_par = [];
    public Request $request;
    public Respons $respons;

    public function __construct(Request $request, Respons $respons)
    {
        $this->request = $request;
        $this->respons = $respons;        
    }

    public function getRouts(): array
    {
        return $this->routes;
    }

    public function add($path, $callback, $metod):self
    {
        $path = trim($path, "/");
        if(is_array($metod)){
            $metod = array_map("strtoupper", $metod);
        }else{
            $metod = [strtoupper($metod)];
        }

        $this->routes = [
            "path" => "$path",
            "callback" => "$callback",
            "metod" => "$metod",
        ];
        return $this;
    }

    public function get($path, $callback):self
    {
        return $this->add($path, $callback, "GET");
    }

    public function pjst($path, $callback):self
    {
        return $this->add($path, $callback, "POST");
    }
}