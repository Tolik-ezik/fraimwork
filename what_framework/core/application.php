<?php
namespace PhpFramework;

use PhpFramework\Request as Request;
use PhpFramework\Respons;
use PhpFramework\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "request.php"; 
require_once "respons.php";
require_once "router.php";

class Application{
    protected string $uri;
    public Request $request;
    public Router $router;
    public Respons $respons;
    public static Application $app;

    public function __construct()
    {
        self::$app = $this;
        $this->uri = $_SERVER["QUERY_STRING"];
        $this->request = new Request($this->uri);
        $this->respons = new Respons();
        $this->router = new Router($this->request,  $this->respons);
    }
}