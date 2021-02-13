<?php
namespace myBlog\core;
class Application
{
    public Request $request;
    public Router  $router;
    public function __construct()
    {   
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(){
        // todo
        $this->router->resolve();
    }
}
