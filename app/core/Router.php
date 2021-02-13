<?php

namespace myBlog\core;

class Router
{
    public Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    protected array $routers = [];
    public function get($path, $callbak)
    {
        $this->routers['get'][$path] = $callbak;
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callbak = $this->routers[$method][$path] ?? false;
        if($callbak === \false){
            echo 'Not found';
            exit;
        }
        echo call_user_func($callbak);
    }

}
