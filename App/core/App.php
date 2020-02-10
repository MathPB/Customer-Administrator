<?php 

namespace App\Core;

class App {

    // Path inicial
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        // Definindo a url
        $url = $this->parseURL();

        // Acesso para as outras páginas
        if(file_exists('..App/controllers/'.$url[1].'.php')){
            $this->controller = $url[1];
            unset($url[1]);
        };

        require '../App/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if(isset($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method = $url[2];
                unset($url[2]);
                unset($url[0]);
            };
        };

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL(){
        return explode('/', filter_var($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
    }

}