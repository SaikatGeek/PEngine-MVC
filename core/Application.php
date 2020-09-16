<?php
namespace app\core;


class Application
{
    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;

    public function __construct($dirname)
    {
        self::$ROOT_DIR = $dirname;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }


}